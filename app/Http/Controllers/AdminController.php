<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        $donors = User::where('user_type','=','donor')->count();
        $trans_depts = User::where('user_type','=','transfuziology_dept')->count();

        return view('admin.index')->with(compact('donors','trans_depts'));
    }


    public function all_donors(){
    
        $donors = User::where('user_type','=','donor')->count();
        $trans_depts = User::where('user_type','=','transfuziology_dept')->count();

        $all_donors = User::where('user_type','=','donor')->orderBy('id','desc')->get();

        return view('admin.all_donors')->with(compact('donors','trans_depts','all_donors'));

    }

    public function all_depts(){

        $all_depts = User::where('user_type','=','transfuziology_dept')->orderBy('id','desc')->get();

        return view('admin.all_depts')->with('all_depts',$all_depts);
    }

    public function create_donor(){

        return view('admin.create_donor');
    }

    public function store_donor(Request $request){

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'birth_date'=> 'required|date',
            'email' => 'required|Email|Unique:users',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed'
        ]);

        //Create new Donor 
        $donor = new User();
        $donor->name = $request->input('name');
        $donor->birth_date = $request->input('birth_date');
        $donor->email = $request->input('email');
        $donor->phone_number = $request->input('phone_number');
        $donor->user_type = 'donor';
        $donor->address = $request->input('address');
        $donor->city = $request->input('city');
        $donor->password = Hash::make($request->input('password'));
        $donor->save();

        return redirect()->route('alldonors')->with('success','Uspješno ste dodali novog darivatelja '.$donor->name.'.');

    }

    public function create_trans_dept(){

        return view('admin.create_trans_dept');
    }

    public function store_dept(Request $request){

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|Email|Unique:users',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed'
        ]);

        //Create new Dept
        $dept = new User();
        $dept->name = $request->input('name');
        $dept->email = $request->input('email');
        $dept->phone_number = $request->input('phone_number');
        $dept->user_type = 'transfuziology_dept';
        $dept->address = $request->input('address');
        $dept->city = $request->input('city');
        $dept->password = Hash::make($request->input('password'));
        $dept->save();

        return redirect()->route('alldepts')->with('success','Uspješno ste dodali novu transfuziološku ustanovu '.$dept->name.'.');

    }

    public function edit_donor($id){

        $donor = User::find($id);
        return view('admin.edit_donor')->with('donor',$donor);
    }

    public function update_donor(Request $request,$id){

        $this->validate($request,[
            'name' => 'required',
            'birth_date'=> 'required|date',
            'email' => 'required|Email',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255'
        ]);

        //Update Donor 
        $donor = User::find($id);
        $donor->name = $request->input('name');
        $donor->birth_date = $request->input('birth_date');
        $donor->email = $request->input('email');
        $donor->phone_number = $request->input('phone_number');
        $donor->address = $request->input('address');
        $donor->city = $request->input('city');
        $donor->save();

        return redirect()->route('alldonors')->with('success','Uspješno ste uredili podatke o darivatelju '.$donor->name.'.');
    }

    public function destroy_donor($id){

        $donor=User::find($id);
        $donor->delete();

        return redirect()->route('alldonors')->with('success','Uspješno ste izbrisali darivatelja '.$donor->name.'.');
    }

    public function edit_dept($id){

        $dept = User::find($id);
        return view('admin.edit_trans_dept')->with('dept',$dept);
    }

    public function update_dept(Request $request,$id){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|Email',
            'phone_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255'
        ]);

        //Update Tranfuziology Dept
        $dept = User::find($id);
        $dept->name = $request->input('name');
        $dept->email = $request->input('email');
        $dept->phone_number = $request->input('phone_number');
        $dept->address = $request->input('address');
        $dept->city = $request->input('city');
        $dept->save();

        return redirect()->route('alldepts')->with('success','Uspješno ste uredili podatke o transfuziološkoj ustanovi '.$dept->name.'.');
    }

    public function destroy_dept($id){

        $trans_dept=User::find($id);
        $trans_dept->delete();

        return redirect()->route('alldepts')->with('success','Uspješno ste izbrisali transfuziološku ustanovu '.$trans_dept->name.'.');
    }
    
    

}