@extends('layouts.app')

@section('title','Prikaz podataka o darivatelju')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8"> 
            <div class="container" style="background-color:#F5F5DC;"><br>
                <div class="float-right">
                    @if(isset($total_blood_giving) && isset($last_blood_giving))
                    <div>
                        <h3><img src="{{ asset('images/plazma.PNG')}}"> {!! $total_blood_giving !!}<sup style="font-size: 20px"> darivanja</sup></h3>
                        <center><p>Ukupan broj darivanja</p></center>
                    </div>
                    <div>
                            <h5><img src="{{ asset('images/plazma.PNG')}}"> {!! $last_blood_giving->date !!}<sup style="font-size: 20px"></sup></h5>
                            <center><p>Zadnje darivanje</p></center>
                    </div>
                    @else
                    <h5><img src="{{ asset('images/plazma.PNG')}}"></h5>
                    <center><p>Nije zabilježeno nijedno darivanje ovog darivatelja!</p></center>
                    @endif
                </div>
                <img src="{{ asset('images/profile.jpg')}}"><br><br> 
                <h3 style="color:#bd1e24;">{!!$donor->name!!}</h3>  

                @if($donor->birth_date!=null)
                <div class="form-group">
                    {{ Form::label('birth_date','Datum rođenja')}}
                    {{ Form::date('birth_date',$donor->birth_date,['class' => 'form-control'])}}
                </div><!--/form-group-->
                @endif

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
                </div><!--/form-group--><br>
            </div><!--/container-->
        </div><!--/col-sm-8-->
        <div class="col-sm-4">
            <center>
                <img class="d-block w-100" src="{{ asset('images/blood_transfuzion.PNG') }}" alt="Blood image">
            </center>
        </div><!--/col-sm-4-->
    </div><!--/row-->                  
</div><!--/container-fluid-->
@endsection