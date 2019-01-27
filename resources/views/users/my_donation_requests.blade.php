@extends('layouts.app')

@section('title','Moja darivanja')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-9">
            <div class="container-fluid">
                <div class="card-title" style="color:#bd1e24;"><h3>Moje rezervacije</h3></div><br>
                <div class="card-text">
                    @if(count($my_donation_requests)>0)
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Transfuziološka ustanova</th>
                            <th scope="col">Odabrani datum i vrijeme</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($my_donation_requests as $req)
                        <tr>
                            <td>{{ $req->trans_dept->name}}</td>
                            <td>{{ $req->wanted_date}}</td>
                            <td>
                                @if($req->approved === 0)
                                    <button class="btn btn-secondary"><i class="fa fa-check"> </i> Čekanje na odobrenje</button>
                                @elseif($req->approved ===1)
                                    <button class="btn btn-light"><i class="fa fa-check"> </i> Odobreno</button>
                                @elseif($req->approved===2)
                                    <button class="btn btn-danger"><i class="fa fa-times-circle"></i> Odbijeno</button>
                                @else
                                    <button class="btn btn-light"><i class="fa fa-ban"></i> Otkazano</button>
                                @endif
                            </td>
                            <td>
                                @if($req->checkdays() > 1 && $req->approved!=2 && $req->approved!=3)
                                    <!--Cancel donation request form-->
                                    {!! Form::model( $req, ['route' => ['canceldonationrequest', $req->id], 'method' => 'PUT']) !!}
                                    <button type="submit" class="btn btn-secondary"><i class="fa fa-ban"></i> Otkaži</button>
                                    {!!Form::close()!!}
                                @elseif($req->approved===2)
                                    <p></p>
                                @elseif($req->approved===3)
                                    <p></p>
                                @else
                                    <p>Isteklo je vrijeme za otkazivanje rezervacije.</p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                    @else
                        <hr>
                        <p style="color:#bd1e24;"> 
                            <b>Nije pronađena niti jedna rezervacija u povijesti.</b>
                        </p>
                    @endif
                </div><!--/card-text-->
            </div><!--/container-fluid-->
        </div><!--/col-sm-8-->
        <div class="col-sm-3">
            <center><br>
                <img class="d-block w-100" src="{{ asset('images/blood_transfuzion.png') }}" alt="Blood image">
            </center>
        </div><!--/col-sm-4-->
    </div><!--/row-->
</div><!--/container-fluid-->
@endsection