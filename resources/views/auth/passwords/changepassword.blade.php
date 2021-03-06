@extends('layouts.app')
 
@section('title','Promjena lozinke')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            <div class="container" style="background-color:#F5F5DC;"><br>
                <div class="container">
                    <h3 style="color:#bd1e24;">Promjena lozinke</h3>
                </div><!--/container--><hr>
                <div class="card-body">
                    <form  method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}
 
                        <div class="form-group row{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 col-form-label text-md-right">Trenutna lozinka</label>
                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>
                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!--/form-group row-->
 
                        <div class="form-group row{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 col-form-label text-md-right">Nova lozinka</label>
                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>
                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!--/form-group row-->
 
                        <div class="form-group row">
                            <label for="new-password-confirm" class="col-md-4 col-form-label text-md-right">Potvrda nove lozinke</label>
                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div><!--/form-group row-->
 
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    Promijeni lozinku
                                </button>
                                <a href="{{route('myProfile')}}" class="btn btn-light">Odustani</a>
                            </div>
                        </div><!--/form-group row mb-0-->
                    </form>
                </div><!--/card-body-->
            </div><!--/container-->
        </div><!--/col-sm-8-->

        <div class="col-sm-3">
            <center>
                <img class="d-block w-100" src="{{ asset('images/blood_transfuzion.PNG') }}" alt="Blood image">
            </center>
        </div><!--/col-sm-4-->
    </div><!--row-->
</div><!--/conatiner-fluid-->
@endsection