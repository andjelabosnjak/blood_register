@extends('layouts.admin')

@section('title','Pregled svih ustanova')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-fluid">
                <a href="{{route('admin')}}" class="btn btn-outline-danger">Natrag na admin panel</a> <br><br>
                <div class="card-title" style="color:#bd1e24;"><h3>Pregled svih transfuzioloških ustanova</h3></div><br>
                <div class="card-text">
                    @if(count($all_depts)>0)
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Naziv</th>
                            <th scope="col">Email</th>
                            <th scope="col">Broj telefona</th>
                            <th scope="col">Adresa</th>
                            <th scope="col">Grad</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($all_depts as $dept)
                        <tr>
                            <td>{{ $dept->name}}</td>
                            <td>{{ $dept->email}}</td>
                            <td>{{ $dept->phone_number}}</td>
                            <td>{{ $dept->address}}</td>
                            <td>{{ $dept->city }}</td>
                            <td> 
                                <a href="{{route('editdept',['dept' =>  $dept->id  ])}}" class="btn btn-light"><i class="fa fa-edit"></i> Uredi</a>
                            </td>
                            <td>
                                <!--Delete-->
                                {!!Form::open(['action' => ['AdminController@destroy_dept',$dept->id],'method'=>'POST','onsubmit' => "return confirm('Jeste li sigurni da želite izbrisati?')"])!!}
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
                            <b>Nije pronađena niti jedna transfuziološka ustanova.</b>
                        </p>
                    @endif
                </div><!--/card-text-->
            </div><!--/container-fluid-->
        </div><!--/col-sm-8-->
        <div class="col-sm-3">
            <center><br><br><br><br>
                <img class="d-block w-100" src="{{ asset('images/blood_transfuzion.PNG') }}" alt="Blood image">
            </center>
        </div><!--/col-sm-4-->
    </div><!--/row-->
</div><!--/container-fluid-->
@endsection