<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    //this function shows questionnaire for donor before registration
    public function questionnaire(){

        return view('users.questionnaire');
    }

    //this function check answers in questinnaire and shows registration form if answers are ok
    public function checkquestionnaire(Request $request){

        $this->validate($request,[
            'btn1' => 'required',
            'btn2' => 'required',
            'btn3' => 'required',
            'btn4' => 'required'
        ]);

        $btn1=$request->get('btn1');
        $btn2=$request->get('btn2');
        $btn3=$request->get('btn3');
        $btn4=$request->get('btn4');

        if($btn1==='DA' && $btn2==='DA' && $btn3==='NE' && $btn4==='NE'){

            return redirect()->route('register')->with('success'," <hr> <strong>Uspješno ste ispunili upitnik!</strong> <br><br>
             Hvala Vam na odgovorima. <br> S obzirom na odgovore koje ste nam dali, smatramo da ste u mogućnosti postati dobrovoljni darivatelj krvi, stoga Vas molimo da se <strong> registrirate</strong>. <hr>");
        }
        else{

            return redirect()->route('home')->with('error',"<hr> <strong> Nesupješno popunjavanje upitnika! </strong> <br><br>Hvala Vam na odgovorima. <br> S obzirom na odgovore koje ste nam dali, savjetujemo Vam da se <strong> ne registrirate </strong> kao dobrovoljni darivatelj krvi.<hr>");

        }

    }

    //this function shows searching form for where donate
    public function wheredonate(){

        return view('users.wheredonate');
    }
    
}
