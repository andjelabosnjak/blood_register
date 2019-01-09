@extends('layouts.app')

@section('title','Pregled svih zahtjeva')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <div class="container-fluid"><br> 
                <div class="card-title" style="color:#bd1e24;"><h3>Pregled povijesti svih zahtjeva</h3></div><br>
                <div class="card-text">
                    @if(count($donation_requests)>0)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Darivatelj</th>
                            <th scope="col">Odabrani datum i vrijeme</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($donation_requests as $req)
                        <tr>
                            <td>{{ $req->donor->name}}</td>
                            <td>{{ $req->wanted_date}}</td>
                            <td>
                                @if($req->approved==1)
                                    <button class="btn btn-light"><i class="fa fa-check"> </i> Odobreno</button>
                                @else
                                    <button class="btn btn-danger"><i class="fa fa-times-circle"></i> Odbijeno</button>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <hr>
                        <p style="color:#bd1e24;"> 
                            <b>Nije pronađen niti jedan zahtjev u povijesti.</b>
                        </p>
                    @endif
                </div><!--/card-text-->
            </div><!--/container-fluid-->
        </div><!--/col-sm-8-->
        <div class="col-sm-4">
            <center>
                <img class="d-block w-100" src="{{ asset('images/pr.jpg') }}" alt="Blood image">
            </center>
        </div><!--/col-sm-4-->
    </div><!--/row-->
</div><!--/container-fluid-->
@endsection