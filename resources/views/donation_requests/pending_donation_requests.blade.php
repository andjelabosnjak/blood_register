@extends('layouts.app')

@section('title','Zahtjevi na čekanju')

@section('content')
<div class="container-fluid">
    <div class="row" >
        <div class="col-sm-9">
            <div class="container-fluid">
                <div class="card-title" style="color:#bd1e24;"><h3>Zahtjevi na čekanju</h3></div><br>
                <div class="card-text">
                    @if(count($pending_donation_requests)>0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Darivatelj</th>
                            <th scope="col">Odabrani datum i vrijeme</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($pending_donation_requests as $req)
                            <tr>
                                <td>{{ $req->donor->name}}</td>
                                <td>{{ $req->wanted_date}}</td>
                                <td>  
                                    <!--Approve donation request form-->
                                    {!! Form::model( $req, ['route' => ['approvedonationrequest', $req->id], 'method' => 'PUT']) !!}
                                    <button type="submit" class="btn btn-light"><i class="fa fa-check"></i> Odobri</button>
                                    {!!Form::close()!!}
                                </td>
                                <td>    
                                    <!-- Decline donation request form-->
                                    {!! Form::model( $req, ['route' => ['declinedonationrequest', $req->id], 'method' => 'PUT']) !!}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-times-circle"></i> Odbij</button>
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <hr>
                        <p style="color:#bd1e24;"> 
                            <b>Nema zahtjeva na čekanju.</b>
                        </p>
                    @endif
                </div><!--/card-text-->
            </div><!--/container-fluid-->
        </div><!--/col-sm-8-->
        <div class="col-sm-3">
            <center><br><br>
                    <img class="d-block w-100" src="{{ asset('images/blood_transfuzion.PNG') }}" alt="Blood image">
            </center>
        </div><!--/col-sm-4-->
    </div><!--/row-->
</div><!--/container-fluid-->
@endsection