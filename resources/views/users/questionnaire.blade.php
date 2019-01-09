@extends('layouts.app')

@section('title','Upitnik')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="card" style="background-color:#F5F5DC;">
                <div class="container"></br>
                    <div class="card-title"><h2 style="color:#bd1e24;">Prije nego se registrirate kao dobrovoljni darivatelj</h2></div><hr>
                    <div class="card-text"><h5 class="text-dark" style="text-align:justify;">
                        Većina ljudi može dati krv, no postoje situacije kada darivanje ipak nije moguće.<br><br>
                        Molimo Vas da iskreno odgovorite na sljedeća četiri pitanja, kako bi procijenili jeste li 
                        u mogućnosti postati dobrovoljni darivatelj krvi. <br><br>
                        Ne brinite, vaši odgovori neće biti spremljeni ni u jednom obliku. <hr>
                        <br>
                        <form method="POST" action="{{route('checkquestionnaire')}}">
                        {{ csrf_field() }}

                        <b style="color:#bd1e24;">1.)  Imate li između 18-66 godina?</b><br><br><br>
                        <div class="row">
                            <div style="padding-right:50px; padding-left:30px;">
                                <input type="radio" name="btn1" value="DA" checked> DA             
                            </div>
                            <div>
                                <input type="radio" name="btn1" value="NE"> NE<br><br> <br>
                            </div>
                        </div><!--/row-->

                        <b style="color:#bd1e24;">2.)  Jeste li teži od 50 kilograma?</b><br><br><br>
                        <div class="row">
                            <div style="padding-right:50px; padding-left:30px;">
                                <input type="radio" name="btn2" value="DA" checked> DA             
                            </div>
                            <div>
                                <input type="radio" name="btn2" value="NE"> NE<br><br> <br>
                            </div>
                        </div><!--/row-->

                        <b style="color:#bd1e24;">3.)  Jeste li od 1. siječnja 1980. imali transfuziju krvi?</b><br><br><br>
                        <div class="row">
                            <div style="padding-right:50px; padding-left:30px;">
                                <input type="radio" name="btn3" value="DA" checked> DA             
                            </div>
                            <div>
                                <input type="radio" name="btn3" value="NE"> NE<br><br> <br>
                            </div>
                        </div><!--/row-->

                        <b style="color:#bd1e24;">4.)  Jeste li ikada imali karcinom?</b><br><br><br>
                        <div class="row">
                            <div style="padding-right:50px; padding-left:30px;">
                                <input type="radio" name="btn4" value="DA" checked> DA             
                            </div>
                            <div>
                                <input type="radio" name="btn4" value="NE"> NE<br><br> <br> <br><br>
                            </div>
                        </div><!--/row-->
         
                        <button type="submit" class="btn btn-danger">Provjerite odgovore</button> 
                        <a href="{{route('home')}}" class="btn btn-light" style="margin-left:10px;">Odustanite</a> <br><br>
                        </form></h5>
                    </div><!--/card-text-->
                </div><!--/container-->
            </div><!--/card-->
        </div><!--/col-sm-8-->
        <div class="col-sm-4">
            <div class="container" >
                <center>
                    <img class="d-block w-100" src="{{ asset('images/blood_icon.PNG') }}" alt="Blood image">
                </center>
            </div><!--/container-->
        </div><!--/col-sm-4-->
    </div><!--/row-->
</div><!--/container-fluid-->
@endsection