@extends('layouts.admin')

@section('title','Uredi transfuziološku ustanovu')

@section('content')
<div class="container-fluid">
        <div class="row">
                <div class="col-sm-8">
                        <a href="{{route('admin')}}" class="btn btn-outline-danger">Natrag na admin panel</a><br><br>
                        <div class="container" style="background-color:#F5F5DC;"><br>
                                <h3 style="color:#bd1e24;">Uredi transfuziološku ustanovu</h3><hr>

                                {{ Form::model( $dept, ['route' => ['updatetransdept', $dept->id], 'method' => 'put']) }}
                                    <div class="form-group">
                                        {{ Form::label('name','Ime i prezime')}}
                                        {{ Form::text('name',$dept->name,['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                                   
                                    <div class="form-group">
                                        {{ Form::label('email','Email')}}
                                        {{ Form::email('email',$dept->email,['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                    
                                    <div class="form-group">
                                        {{ Form::label('phone_number','Broj telefona')}}
                                        {{ Form::text('phone_number',$dept->phone_number,['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                    
                                    <div class="form-group">
                                        {{ Form::label('address','Adresa')}}
                                        {{ Form::text('address',$dept->address,['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                    
                                    <div class="form-group">
                                        {{ Form::label('city','Grad')}}
                                        {{ Form::text('city',$dept->city,['class' => 'form-control'])}}
                                    </div>
                                   <br>
                    
                                    {{ Form::submit('Ažuriraj',['class' => 'btn btn-danger'])}}
                                    <a class="btn btn-light" href="{{route('alldepts')}}">Odustani</a>
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