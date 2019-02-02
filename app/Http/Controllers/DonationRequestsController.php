<?php

namespace App\Http\Controllers;
use App\DonationRequests;
use App\User;
use App\DonorArrivals;
use App\Notifications\NotifyDonorAboutSuccessfulDonationRequest;
use App\Notifications\NotifyDonorAboutUnsuccessfulRequest;
use App\Notifications\NotifyTransDeptAboutCancel;
use Illuminate\Http\Request;

class DonationRequestsController extends Controller
{
    public function all_donation_requests(){

        $donation_requests = DonationRequests::where('approved','!=','0')->where('trans_dept_id' ,'=',auth()->user()->id)->orderBy('id','desc')->get();

        return view('donation_requests.all_donation_requests')->with('donation_requests',$donation_requests);
    }

    public function pending_donation_requests(){

        $pending_donation_requests = DonationRequests::where('approved','=','0')->where('trans_dept_id' ,'=',auth()->user()->id)->orderBy('id','desc')->get();
        $requests_on_waiting=DonationRequests::where('trans_dept_id','=',auth()->user()->id)->where('approved','=','0')->count();

        return view('donation_requests.pending_donation_requests')->with(compact('pending_donation_requests','requests_on_waiting'));
    }

    public function show_donor($id){

        $donor = User::find($id);
        $total_blood_giving = DonorArrivals::where('donor_id','=',$id)->where('status','=','uspješno')->count();
        $last_blood_giving = DonorArrivals::where('donor_id','=',$id)->where('status','=','uspješno')->orderBy('id', 'desc')->first();

        return view('donation_requests.show_donor')->with(compact('donor','total_blood_giving','last_blood_giving'));
    }
    public function approve($id){

        $donation_request=DonationRequests::find($id);
        $donation_request->approved=1;
        $donation_request->save();

        $user=User::find($donation_request->donor_id);
        $user->notify(new NotifyDonorAboutSuccessfulDonationRequest($donation_request));

        return redirect()->back()->with('success','<strong>Odobrili ste zahtjev</strong> za darivanjem korisnika '.$donation_request->donor->name.'.');
    }

    public function decline($id){

        $donation_request=DonationRequests::find($id);
        $donation_request->approved=2;
        $donation_request->save();

        $user=User::find($donation_request->donor_id);
        $user->notify(new NotifyDonorAboutUnsuccessfulRequest($donation_request));

        return redirect()->back()->with('error','<strong>Odbili ste zahtjev </strong> za darivanjem korisnika '.$donation_request->donor->name.'.');
    }

    public function cancel($id){

        $donation_request=DonationRequests::find($id);
        $donation_request->approved=3;
        $donation_request->save();

        $user=User::find($donation_request->trans_dept_id);
        $user->notify(new NotifyTransDeptAboutCancel($donation_request));

        return redirect()->back()->with('success','<strong>Otkazali ste zahtjev </strong> za darivanjem.');
    }
}
