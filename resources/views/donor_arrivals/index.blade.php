@extends('layouts.app')

@section('title','Pregled povijesti svih dolazaka') 

@section('content')
<div class="container-fluid">
    <div class="row" >
        <div class="col-sm-10">
                {!! Form::open(['method'=>'GET','action' => 'SearchController@searchdonorindonorarrivals','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                <div class="input-group custom-search-form col-5 pull-right">
                    <input type="text" class="form-control" name="search" placeholder="Pretraži...">
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit">
                        <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div><!--/input-group custom-search-form col-5 pull-right-->
            {!! Form::close() !!}
            <div class="container-fluid">
                <div class="card-title" style="color:#bd1e24;"><h3>Pregled povijesti svih dolazaka</h3></div><br>
                <div class="card-text">
                    @if(count($donor_arrivals)>0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Darivatelj</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Krvna grupa</th>
                            <th scope="col">Krvni tlak</th>
                            <th scope="col">Razina hemoglobina</th>
                            <th scope="col">Status darivanja</th>
                            <th scope="col">Napomena</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($donor_arrivals as $arrival)
                            <tr>
                                <td>{{ $arrival->donor->name}}</td>
                                <td>{{ $arrival->date}}</td>
                                <td>{{ $arrival->blood_group}}</td>
                                <td>{{ $arrival->blood_presure}}</td>
                                <td>{{ $arrival->hemoglobin_level}}</td>
                                <td>
                                    @if($arrival->status === 'uspješno')
                                        <button class="btn btn-light"><i class="fa fa-check"> </i> Uspješno</button>
                                    @else 
                                        <button class="btn btn-danger"><i class="fa fa-times-circle"></i> Neuspješno</button>
                                    @endif
                                </td>
                                <td>{{ $arrival->note}}</td>
                                <td> 
                                    <a href="{{route('editdonorarrival',['donor_arrival' =>  $arrival->id  ])}}" class="btn btn-light"><i class="fa fa-edit"></i> Uredi</a>
                                </td>
                                <td>
                                    <!--Delete-->
                                    {!!Form::open(['action' => ['DonorArrivalsController@destroy',$arrival->id],'method'=>'POST','onsubmit' => "return confirm('Jeste li sigurni da želite izbrisati?')"])!!}
                                    {{Form::hidden('_method','DELETE')}}   
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Izbriši</button>   
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <hr>
                        <p style="color:#bd1e24;"> 
                            <b>Nije pronađen niti jedan dolazak u povijesti.</b>
                        </p>
                    @endif
                </div><!--/card-text-->
            </div><!--/container-fluid-->
        </div><!--/col-sm-8-->
        <div class="col-sm-2">
            <center>
            </center>
        </div><!--/col-sm-4-->
    </div><!--/row-->
</div><!--/container-fluid-->
@endsection