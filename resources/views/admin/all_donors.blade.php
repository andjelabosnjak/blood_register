@extends('layouts.admin')

@section('title','Pregled svih darivatelja')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-9">
                <div class="container-fluid"><br> 
                    <a href="{{route('admin')}}" class="btn btn-outline-danger">Natrag na admin panel</a> <br><br>
                    <div class="card-title" style="color:#bd1e24;"><h3>Pregled svih darivatelja</h3></div><br>
                    <div class="card-text">
                        @if(count($all_donors)>0)
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Ime i prezime</th>
                                <th scope="col">Datum rođenja</th>
                                <th scope="col">Email</th>
                                <th scope="col">Broj telefona</th>
                                <th scope="col">Adresa prebivališta</th>
                                <th scope="col">Grad</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($all_donors as $donor)
                            <tr>
                                <td>{{ $donor->name}}</td>
                                <td>{{ $donor->birth_date}}</td>
                                <td>{{ $donor->email}}</td>
                                <td>{{ $donor->phone_number}}</td>
                                <td>{{ $donor->address}}</td>
                                <td>{{ $donor->city }}</td>
                                <td> 
                                    <a href="{{route('editdonor',['donor' =>  $donor->id  ])}}" class="btn btn-light"><i class="fa fa-edit"></i> Uredi</a>
                                </td>
                                <td>
                                    <!--Delete-->
                                    {!!Form::open(['action' => ['AdminController@destroy_donor',$donor->id],'method'=>'POST','onsubmit' => "return confirm('Jeste li sigurni da želite izbrisati?')"])!!}
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
                                <b>Nije pronađen niti jedan darivatelj.</b>
                            </p>
                        @endif
                    </div><!--/card-text-->
                </div><!--/container-fluid-->
            </div><!--/col-sm-8-->
            <div class="col-sm-3">
                <center><br><br><br><br><br>
                    <img class="d-block w-100" src="{{ asset('images/blood_transfuzion.PNG') }}" alt="Blood image">
                </center>
            </div><!--/col-sm-4-->
        </div><!--/row-->
    </div><!--/container-fluid-->
@endsection