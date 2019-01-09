@extends('layouts.app')

@section('title','Dodaj novi dolazak')

@section('content')
<div class="container-fluid">
        <div class="row">
                <div class="col-sm-8">
                        <div class="container" style="background-color:#F5F5DC;"><br>
                                <h3 style="color:#bd1e24;">Ažuriraj dolazak</h3><hr>

                                {{ Form::model( $donor_arrival, ['route' => ['updatedonorarrival', $donor_arrival->id], 'method' => 'put']) }}
                                <div class="form-group">
                                        {{ Form::label('donor_id','Darivatelj')}}
                                        <select class="form-control" name="donor_id">
                                                @if(count($users) > 0)
                                                        @foreach($users as $user)
                                                                <option value="{{ $user->id }}"}}  @if($user->id===$donor_arrival->donor_id) selected="selected" @endif>{{ $user->name }}</option>     
                                                        @endforeach
                                                @endif
                                        </select>
                                </div><!--/form-group-->

                                <div class="form-group">
                                        {{ Form::label('blood_group','Krvna grupa')}}
                                        <select class="form-control" name="blood_group">
                                                <option value="A+" @if($donor_arrival->blood_group=="A+") selected="selected" @endif >A+</option> 
                                                <option value="A-" @if($donor_arrival->blood_group=="A-") selected="selected" @endif>A-</option>  
                                                <option value="B+" @if($donor_arrival->blood_group=="B+") selected="selected" @endif>B+</option>  
                                                <option value="B-" @if($donor_arrival->blood_group=="B-") selected="selected" @endif>B-</option>  
                                                <option value="0+" @if($donor_arrival->blood_group=="0+") selected="selected" @endif>0+</option>  
                                                <option value="0-" @if($donor_arrival->blood_group=="0-") selected="selected" @endif>0-</option>  
                                                <option value="AB+" @if($donor_arrival->blood_group=="AB+") selected="selected" @endif>AB+</option>  
                                                <option value="AB-" @if($donor_arrival->blood_group=="AB-") selected="selected" @endif>AB-</option>     
                                        </select>
                                </div><!--/form-group-->

                                <div class="form-group">
                                        {{ Form::label('blood_presure','Krvni tlak')}}
                                        {{ Form::text('blood_presure',$donor_arrival->blood_presure,['class' => 'form-control', 'placeholder' =>'Krvni tlak'])}}
                                </div><!--/form-group-->

                                <div class="form-group">
                                        {{ Form::label('hemoglobin_level','Razina hemoglobina')}}
                                        {{ Form::text('hemoglobin_level',$donor_arrival->hemoglobin_level,['class' => 'form-control', 'placeholder' => 'Razina hemoglobina u krvi'])}}
                                </div><!--/form-group-->

                                <div class="form-group">
                                        {{ Form::label('status','Status darivanja')}}
                                        <select class="form-control" name="status">
                                                <option value="uspješno" @if($donor_arrival->status=="uspješno") selected="selected" @endif>Uspješno</option> 
                                                <option value="neuspješno" @if($donor_arrival->status=="neuspješno") selected="selected" @endif>Neuspješno</option>  
                                        </select>
                                </div><!--/form-group-->

                                <div class="form-group">
                                        {{ Form::label('note','Napomena')}}
                                        {{ Form::textarea('note',$donor_arrival->note,[ 'class' => 'form-control', 'placeholder' => 'Napomena'])}}
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