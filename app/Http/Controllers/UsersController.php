<?php

namespace App\Http\Controllers;
use App\User;
use App\DonorArrivals;
use App\DonationRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use App\Notifications\NotifyTransfuziologyDept;
use Illuminate\Http\Request;

class UsersController extends Controller
{

     /* current logged in user personal informations*/
     public function myprofile()
     {
         $user=User::find(auth()->user()->id);
 
         return view('users.my_profile')->with('user',$user);
     }

    /* user has option to update his personal informations like address, name, email,phone number,
    he is not allowed to change informations like fine, membership status (paid,not paid)*/
    public function updatemyprofile(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'city' => 'required'
        ]);

        //Update user personal information
        $user = User::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->phone_number=$request->input('phone_number');
        $user->address=$request->input('address');
        $user->city=$request->input('city');
        $user->save();

        return redirect()->route('myProfile')->with('success','Uspješno ste ažurirali osobne informacije.');
    }

    //change current password form
    public function showChangePasswordForm()
    {
        return view('auth.passwords.changepassword');
    }

    //current logged in user - change password
    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) 
        {
            // The passwords matches
            return redirect()->back()->with("error","Vaša trenutna lozinka ne odgovara pohranjenoj lozinki. Molimo pokušajte ponovno.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0)
        {
            //Current password and new password are same
            return redirect()->back()->with("error","Nova lozinka ne smije biti ista kao stara lozinka. Molimo izaberite drugu lozinku.");
        }

        $validatedData = $request->validate([
        'current-password' => 'required',
        'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Uspješno ste promijenili lozinku!");
    }

    public function mydonorarrivalslog(){

        $my_donor_arrivals=DonorArrivals::where('donor_id','=',auth()->user()->id)->orderBy('id','desc')->get();

        return view('users.my_donor_arrivals')->with('my_donor_arrivals',$my_donor_arrivals);

    }

    //this function shows form to choose a donation date
    public function pickadate($id){

        $trans_dept=User::find($id);

        return view('users.pickadate')->with('trans_dept',$trans_dept);
    }

    //this function sends request to a trans_Dept with wanted_date
    public function sendrequest(Request $request,$id){

        $this->validate($request,[
            'wanted_date' => 'required|date|after:today'
        ]);

        $donation_request = new DonationRequests();

        $donation_request->donor_id=auth()->user()->id;
        $donation_request->trans_dept_id=$id;
        $donation_request->wanted_date=$request->input('wanted_date');
        $donation_request->approved=0;
        $donation_request->save();
        
        $user=User::find($id);
        $user->notify(new NotifyTransfuziologyDept($donation_request));

        return redirect()->back()->with('success','<strong>Uspješno ste poslali zahtjev za darivanjem.</strong> <br> <br> O potvrdi/odbijanju vašeg zahtjeva bit ćete pravovremeno obaviješteni u obliku obavijesti. ');

    }

    public function mydonationrequestslog(){

        $my_donation_requests=DonationRequests::where('donor_id','=',auth()->user()->id)->orderBy('id','desc')->get();

        return view('users.my_donation_requests')->with('my_donation_requests',$my_donation_requests);

    }
}
