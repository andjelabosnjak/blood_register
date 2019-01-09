@extends('layouts.app')

@section('title','Dodaj novi dolazak')

@section('content')
<div class="container-fluid">
        <div class="row">
                <div class="col-sm-8">
                        <div class="container" style="background-color:#F5F5DC;"><br>
                                <h3 style="color:#bd1e24;">Dodaj novi dolazak</h3><hr>

                                {{ Form::open(['action' => 'DonorArrivalsController@store', 'method' => 'POST']) }}
                                <div class="form-group">
                                        {{ Form::label('donor_id','Darivatelj')}}
                                        <select class="form-control" name="donor_id">
                                        @if(count($users) > 0)
                                                @foreach($users as $user)
                                                        <option value="{{ $user->id }}"}}>{{ $user->name }}</option>     
                                                @endforeach
                                        @endif
                                        </select>
                                </div><!--/form-group-->

                                <div class="form-group">
                                        {{ Form::label('blood_group','Krvna grupa')}}
                                        <select class="form-control" name="blood_group">
                                                <option value="A+">A+</option> 
                                                <option value="A-">A-</option>  
                                                <option value="B+">B+</option>  
                                                <option value="B-">B-</option>  
                                                <option value="0+">0+</option>  
                                                <option value="0-">0-</option>  
                                                <option value="AB+">AB+</option>  
                                                <option value="AB-">AB-</option>     
                                        </select>
                                </div><!--/form-group-->

                                <div class="form-group">
                                        {{ Form::label('blood_presure','Krvni tlak')}}
                                        {{ Form::text('blood_presure','',['class' => 'form-control', 'placeholder' =>'Krvni tlak'])}}
                                </div><!--/form-group-->

                                <div class="form-group">
                                        {{ Form::label('hemoglobin_level','Razina hemoglobina')}}
                                        {{ Form::text('hemoglobin_level','',['class' => 'form-control', 'placeholder' => 'Razina hemoglobina u krvi'])}}
                                </div><!--/form-group-->

                                <div class="form-group">
                                        {{ Form::label('status','Status darivanja')}}
                                        <select class="form-control" name="status" style="color:#bd1e24;">
                                                <option value="uspješno">Uspješno</option> 
                                                <option value="neuspješno">Neuspješno</option>  
                                        </select>
                                </div><!--/form-group-->

                                <div class="form-group">
                                        {{ Form::label('note','Napomena')}}
                                        {{ Form::textarea('note','',[ 'class' => 'form-control', 'placeholder' => 'Napomena'])}}
                                </div><!--/form-group--><br>

                                {{ Form::submit('Spremi',['class' => 'btn btn-danger'])}}
                                <a href="{{route('alldonorarrivals') }}" class="btn btn-light">Odustani</a>
                                {{ Form::close() }} <br> 
                        </div><!--/container-->
                </div><!--/col-sm-8-->
                <div class="col-sm-4">
                        <center>
                                <img class="d-block w-100" src="{{ asset('images/pr.jpg') }}" alt="Blood image">
                        </center>
                </div><!--/col-sm-4-->
        </div><!--row-->                  
</div><!--container-fluid-->
@endsection