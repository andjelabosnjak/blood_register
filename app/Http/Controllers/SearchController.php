<?php

namespace App\Http\Controllers;
use App\User;
use App\DonorArrivals;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $search = \Request::get('search'); // use global request to get the param of URI
        
        $transfuziology_dept = User::where('user_type','=','transfuziology_dept')
                            ->where( function ( $query ) use ($search)
                            {
                                $query->where('name','LIKE','%'.$search.'%')
                                ->orWhere('address','LIKE','%'.$search.'%')
                                ->orWhere('city', 'LIKE', '%'.$search.'%');
                            })
                            ->orderBy('name')
                            ->get();
    
        return view('users.searchwheredonate')->with('transfuziology_dept',$transfuziology_dept);
        
    }

    public function searchdonorindonorarrivals(){

        $search = \Request::get('search'); // use global request to get the param of URI

        $donor_arrivals = DonorArrivals::join('users','donor_arrivals.donor_id','=','users.id')
                ->where('trans_dept_id' ,'=',auth()->user()->id)
                ->where( function ( $query ) use ($search)
                {
                    $query->where('name','LIKE','%'.$search.'%')
                    ->orWhere('name','LIKE','%'.$search.'%')
                    ->orWhere('date','LIKE','%'.$search.'%')
                    ->orWhere('blood_group','LIKE','%'.$search.'%')
                    ->orWhere('blood_presure','LIKE','%'.$search.'%')
                    ->orWhere('hemoglobin_level','LIKE','%'.$search.'%')
                    ->orWhere('status','LIKE','%'.$search.'%')
                    ->orWhere('note','LIKE','%'.$search.'%');
                })
                ->select('*','donor_arrivals.donor_id as donor_id')
                ->orderBy('donor_id')
                ->get();
        
        return view('donor_arrivals.search')->with('donor_arrivals',$donor_arrivals);
    }
   

}
