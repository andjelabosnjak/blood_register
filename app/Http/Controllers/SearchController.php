<?php

namespace App\Http\Controllers;
use App\User;
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

   

}
