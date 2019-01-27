@extends('layouts.admin')

@section('title','Dodaj novu transfuziološku ustanovu')

@section('content')
<div class="container-fluid">
        <div class="row">
                <div class="col-sm-8">
                        <a href="{{route('admin')}}" class="btn btn-outline-danger">Natrag na admin panel</a><br><br>
                        <div class="container" style="background-color:#F5F5DC;"><br>
                                <h3 style="color:#bd1e24;">Dodaj novu transfuziološku ustanovu</h3><hr>

                                {{ Form::open(['action' => 'AdminController@store_dept', 'method' => 'POST']) }}
                                    <div class="form-group">
                                        {{ Form::label('name','Naziv')}}
                                        {{ Form::text('name','',['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                                   
                                    <div class="form-group">
                                        {{ Form::label('email','Email')}}
                                        {{ Form::email('email','',['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                    
                                    <div class="form-group">
                                        {{ Form::label('phone_number','Broj telefona')}}
                                        {{ Form::text('phone_number','',['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                    
                                    <div class="form-group">
                                        {{ Form::label('address','Adresa')}}
                                        {{ Form::text('address','',['class' => 'form-control'])}}
                                    </div><!--/form-group-->
                    
                                    <div class="form-group">
                                        {{ Form::label('city','Grad')}}
                                        {{ Form::text('city','',['class' => 'form-control'])}}
                                    </div>
                                    <div class="form-group">
                                            <label for="password">Lozinka</label>
                                            <input id="password_" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="password-confirm">Potvrda lozinke</label>
                                            <input id="password-confirmation" type="password" class="form-control" name="password_confirmation" required>
                                        </div><!--/form-group--><br>
                    
                                    {{ Form::submit('Spremi',['class' => 'btn btn-danger'])}}
                                    <a class="btn btn-light" href="{{route('admin')}}">Odustani</a>
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