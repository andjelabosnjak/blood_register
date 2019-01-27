@extends('layouts.app')

@section('title','Moja darivanja')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-fluid">
                <div class="card-title" style="color:#bd1e24;"><h3>Moja darivanja</h3></div><br>
                <div class="card-text">
                    @if(count($my_donor_arrivals)>0)
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Transfuziološka ustanova</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Krvna grupa</th>
                            <th scope="col">Krvni tlak</th>
                            <th scope="col">Razina hemoglobina</th>
                            <th scope="col">Status darivanja</th>
                            <th scope="col">Napomena</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($my_donor_arrivals as $arrival)
                        <tr>
                            <td>{{ $arrival->trans_dept->name}}</td>
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
        <div class="col-sm-3">
            <center><br>
                <img class="d-block w-100" src="{{ asset('images/blood_transfuzion.PNG') }}" alt="Blood image">
            </center>
        </div><!--/col-sm-4-->
    </div><!--/row-->
</div><!--/container-fluid-->
@endsection