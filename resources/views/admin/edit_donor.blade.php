@extends('layouts.admin')

@section('title','Uredi darivatelja')

@section('content')
<div class="container-fluid">
        <div class="row">
                <div class="col-sm-8">
                        <a href="{{route('admin')}}" class="btn btn-outline-danger">Natrag na admin panel</a><br><br>
                        <div class="container" style="background-color:#F5F5DC;"><br>
                                <h3 style="color:#bd1e24;">Uredi darivatelja</h3><hr>

                                {{ Form::model( $donor, ['route' => ['updatedonor', $donor->id], 'method' => 'put']) }}
                                    <div class="form-group">
                                        {{ Form::label('name','Ime i prezime')}}
                                        {{ Form::text('name',$donor->name,['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                    
                                    <div class="form-group">
                                        {{ Form::label('birth_date','Datum rođenja')}}
                                        {{ Form::date('birth_date',$donor->birth_date,['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                                   
                                    <div class="form-group">
                                        {{ Form::label('email','Email')}}
                                        {{ Form::email('email',$donor->email,['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                    
                                    <div class="form-group">
                                        {{ Form::label('phone_number','Broj telefona')}}
                                        {{ Form::text('phone_number',$donor->phone_number,['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                    
                                    <div class="form-group">
                                        {{ Form::label('address','Adresa')}}
                                        {{ Form::text('address',$donor->address,['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                    
                                    <div class="form-group">
                                        {{ Form::label('city','Grad')}}
                                        {{ Form::text('city',$donor->city,['class' => 'form-control'])}}
                                    </div>
                                   <br>
                    
                                    {{ Form::submit('Ažuriraj',['class' => 'btn btn-danger'])}}
                                    <a class="btn btn-light" href="{{route('alldonors')}}">Odustani</a>
                                    {{ Form::close() }} <br><br>
                        </div><!--/container-->
                </div><!--/col-sm-8-->
                <div class="col-sm-4">
                        <center><br><br>
                                <img class="d-block w-100" src="{{ asset('images/blood_transfuzion.PNG') }}" alt="Blood image">
                        </center>
                </div><!--/col-sm-4-->
        </div><!--row-->                  
</div><!--container-fluid-->
@endsection