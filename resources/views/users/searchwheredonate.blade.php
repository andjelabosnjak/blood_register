@extends('layouts.app')

@section('title','Pretraži gdje donirati krv')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="container" style="background-color:#F5F5DC;"><br>
                <div class="card-title" style="color:#bd1e24;"><h3>Gdje želite donirati krv?</h3></div>
                <div class="card-text"><br>
                    {!! Form::open(['method'=>'GET','action' => 'SearchController@index','role'=>'search'])  !!}
                    <div class="input-group custom-search-form" >
                        <input type="text" class="form-control" name="search" placeholder="Upišite naziv ili lokaciju željene transfuziološke ustanove..." style="border-color:#bd1e24;"><br><br><br>
                    </div><!--/input-group custom-search-form col-5 pull-right-->
                    <button type="submit" class="btn btn-danger float-right">
                        Pretraži <i class="fa fa-search" aria-hidden="true"></i>
                    </button> 
                    {!! Form::close() !!} <br><br><br>
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
    </div><!--/row--><br><hr>

    <div class="card-body">
    @if(count($transfuziology_dept) > 0)
        <div class="row">
        @foreach($transfuziology_dept as $dept)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="{{ asset('images/blood_hand.jpg') }}">
                    <div class="card-block">
                        <div class="container">
                        <h3 class="card-title"><a style="color: #bd1e24;">{!!$dept->name!!}</a></h3>
                            <div class="card-text">
                                Telefonski broj: <strong>{!!$dept->phone_number!!}</strong> <br>
                                Adresa: <strong>{!!$dept->address!!}</strong> <br>
                                Grad: <strong>{!!$dept->city!!}</strong> <br> <br>
                                @auth
                                <a href="{{route('pickadate',['trans_dept_id' => $dept->id ])}}" class="btn btn-outline-danger"><i class="fa fa-check"></i>  Izaberite datum za darivanje </a><br><br>
                                @endauth
                            </div><!--/card-text-->
                        </div><!--/container-->
                    </div><!--/card-block-->
                </div><!--/card-->
            </div><!--/col-sm-6 col-md-4 col-lg-3-->
        @endforeach
        </div><!--/row-->
    @else 
        <p style="color:#bd1e24;"><b>Ne postoji tražena transfuziološka ustanova.</b></p>
    @endif
    </div><!--/card-body-->
</div><!--/container-fluid-->
@endsection