@extends('layouts.app')

@section('title','Moj profil')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="container" style="background-color:#F5F5DC;"><br> 
                <a class="btn btn-outline-danger pull-right" href="{{ route('showChangePasswordForm') }}">Promijeni lozinku</a>
                <img src="{{ asset('images/profile.jpg')}}"><br><br> 
                <h3 style="color:#bd1e24;">Moj profil</h3>  

                <!--edit logged in user personal informations form--> 
                {{ Form::model( $user, ['route' => ['updateMyProfile', $user->id], 'method' => 'put']) }}
                <div class="form-group">
                    {{ Form::label('name','Ime')}}
                    {{ Form::text('name',$user->name,['class' => 'form-control'])}}
                </div><!--/form-group-->

                @if($user->birth_date!=null)
                <div class="form-group">
                    {{ Form::label('birth_date','Datum rođenja')}}
                    {{ Form::date('birth_date',$user->birth_date,['class' => 'form-control'])}}
                </div><!--/form-group-->
                @endif

                <div class="form-group">
                    {{ Form::label('email','Email')}}
                    {{ Form::email('email',$user->email,['class' => 'form-control'])}}
                </div><!--/form-group-->

                <div class="form-group">
                    {{ Form::label('phone_number','Broj telefona')}}
                    {{ Form::text('phone_number',$user->phone_number,['class' => 'form-control'])}}
                </div><!--/form-group-->

                <div class="form-group">
                    {{ Form::label('address','Adresa')}}
                    {{ Form::text('address',$user->address,['class' => 'form-control'])}}
                </div><!--/form-group-->

                <div class="form-group">
                    {{ Form::label('city','Grad')}}
                    {{ Form::text('city',$user->city,['class' => 'form-control'])}}
                </div><!--/form-group--><br>

                {{ Form::submit('Ažuriraj',['class' => 'btn btn-danger'])}}
                <a class="btn btn-light" href="{{route('home')}}">Odustani</a>
                {{ Form::close() }} <br><br>
            </div><!--/container-->
        </div><!--/col-sm-8-->
        <div class="col-sm-4">
            <center>
                <img class="d-block w-100" src="{{ asset('images/pr.jpg') }}" alt="Blood image">
            </center>
        </div><!--/col-sm-4-->
    </div><!--/row-->                  
</div><!--/container-fluid-->
@endsection