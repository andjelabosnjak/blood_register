@extends('layouts.app')

@section('title','Zahtjev za darivanje')

@section('content')
<div class="container-fluid">
    <div class="card-body">
    @isset($trans_dept)
        <div class="row"><br><br>
            <div class="col-sm-3">
                <img src="{{ asset('images/blood_plus.PNG') }}">
            </div><!--/col-sm-3-->
            <div class="col-sm-9">
            <h3 class="card-title"><a style="color: #bd1e24;">{!!$trans_dept->name!!}</a></h3>
                <div class="card-text">
                    Telefonski broj: <strong>{!!$trans_dept->phone_number!!}</strong> <br><br>
                    Adresa: <strong>{!!$trans_dept->address!!}</strong> <br><br>
                    Grad: <strong>{!!$trans_dept->city!!}</strong> <br>
                    <hr>
                    {!!Form::open(['action' => ['UsersController@sendrequest',$trans_dept->id],'method'=>'POST'])!!}

                    <div class="form-group" style="color:#bd1e24;"><b>
                        {{Form::label('wanted_date','Izaberite željeni datum i vrijeme za darivanje')}} </b>
                        {!!Form::input('dateTime-local','wanted_date','',['class' => 'form-control'])!!}
                    </div> 

                    {{Form::submit('Pošaljite zahtjev za darivanje',['class' => 'btn btn-danger float-right'])}}    
                    {!!Form::close()!!}
                </div><!--/card-text-->
            </div><!--/col-sm-9-->
        </div><!--/row-->
        @endisset
    </div><!--/card-body-->
</div><!--/container-fluid-->
@endsection