<?php

namespace App\Http\Controllers;
use App\User;
use App\DonorArrivals;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DonorArrivalsController extends Controller
{
    public function index(){

        $donor_arrivals=DonorArrivals::orderBy('id','desc')->get();

        return view('donor_arrivals.index')->with('donor_arrivals',$donor_arrivals);
    }
   
   
    public function create(){

        $users=User::where('user_type','=','donor')->get();

        return view('donor_arrivals.create')->with('users',$users);
    }
    
    public function store(Request $request){

        $this->validate($request,[
            'donor_id' => 'required',
            'blood_group'=> 'required',
            'blood_presure' => 'required',
            'hemoglobin_level' => 'required',
            'status' => 'required'
        ]);

        //Create new Donor Arrival
        $donor_arrival = new DonorArrivals();
        $donor_arrival->donor_id = $request->input('donor_id');
        $donor_arrival->trans_dept_id = auth()->user()->id;
        $donor_arrival->date = Carbon::now();
        $donor_arrival->blood_group = $request->input('blood_group');
        $donor_arrival->blood_presure = $request->input('blood_presure');
        $donor_arrival->hemoglobin_level = $request->input('hemoglobin_level');
        $donor_arrival->status = $request->input('status');
        $donor_arrival->note = $request->input('note');
        $donor_arrival->save();

        return redirect()->route('alldonorarrivals')->with('success','Uspješno ste dodali novi dolazak darivatelja '.$donor_arrival->donor->name.'.');
    }

    public function statistics(){

        $a_negative = DonorArrivals::where('blood_group','=','A-')->where('status','=','uspješno')->count();
        $a_positive = DonorArrivals::where('blood_group','=','A+')->where('status','=','uspješno')->count();
        $b_negative = DonorArrivals::where('blood_group','=','B-')->where('status','=','uspješno')->count();
        $b_positive = DonorArrivals::where('blood_group','=','B+')->where('status','=','uspješno')->count();
        $zero_negative = DonorArrivals::where('blood_group','=','0-')->where('status','=','uspješno')->count();
        $zero_positive = DonorArrivals::where('blood_group','=','0+')->where('status','=','uspješno')->count();
        $ab_negative = DonorArrivals::where('blood_group','=','AB-')->where('status','=','uspješno')->count();
        $ab_positive = DonorArrivals::where('blood_group','=','AB+')->where('status','=','uspješno')->count();

        return view('donor_arrivals.statistics')->with(compact('a_negative','a_positive','b_negative','b_positive','zero_negative','zero_positive','ab_negative','ab_positive'));
    }

    public function edit($id){

        $donor_arrival=DonorArrivals::find($id);
        $users=User::where('user_type','=','donor')->get();

        return view('donor_arrivals.edit')->with(compact('donor_arrival','users'));
    }

    public function update(Request $request,$id){

        $this->validate($request,[
            'donor_id' => 'required',
            'blood_group'=> 'required',
            'blood_presure' => 'required',
            'hemoglobin_level' => 'required',
            'status' => 'required'
        ]);

        //Edit Donor Arrival
        $donor_arrival = DonorArrivals::find($id);
        $donor_arrival->donor_id = $request->input('donor_id');
        $donor_arrival->blood_group = $request->input('blood_group');
        $donor_arrival->blood_presure = $request->input('blood_presure');
        $donor_arrival->hemoglobin_level = $request->input('hemoglobin_level');
        $donor_arrival->status = $request->input('status');
        $donor_arrival->note = $request->input('note');
        $donor_arrival->save();

        return redirect()->route('alldonorarrivals')->with('success','Uspješno ste ažurirali podatke o dolasku darivatelja '.$donor_arrival->donor->name.'.');
    }

    public function destroy($id)
    {
        $donor_arrival=DonorArrivals::find($id);
        $donor_arrival->delete();

        return redirect()->route('alldonorarrivals')->with('success','Uspješno ste izbrisali dolazak.');
    }
}
