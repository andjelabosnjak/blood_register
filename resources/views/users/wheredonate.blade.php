@extends('layouts.app')

@section('title','Gdje darivati krv?')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="container" style="background-color:#F5F5DC;"><br>
                <div class="card-title" style="color:#bd1e24;"><h3>Gdje želite donirati krv?</h3></div>
                <div class="card-text"><br>
                    {!! Form::open(['method'=>'GET','action' => 'SearchController@index','role'=>'search'])  !!}
                    <div class="input-group custom-search-form" >
                        <input type="text" class="form-control" name="search" placeholder="Upišite naziv ili lokaciju željene transfuziološke ustanove..." style="border-color:#bd1e24;"> <br><br><br>
                    </div><!--/input-group custom-search-form col-5 pull-right-->
                        <button type="submit" class="btn btn-danger float-right">Pretraži <i class="fa fa-search" aria-hidden="true"></i></button> 
                    {!! Form::close() !!}<br><br><br>
                </div><!--/card-text-->
            </div><!--/container-->
        </div><!--/col-sm-8-->
        <div class="col-sm-4">
            <div class="container" >
                <center>
                    <img class="d-block w-100" src="{{ asset('images/dva.jpg') }}" alt="Blood image">
                </center>
            </div><!--/container-->
        </div><!--/col-sm-4-->
    </div><!--/row-->
</div><!--/container-fluid-->
@endsection