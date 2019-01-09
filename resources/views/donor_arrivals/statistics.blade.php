@extends('layouts.app')

@section('title','Zalihe krvi')

@section('content')
<div class="container-fluid">
<div class="row">
    <div class="col-sm-10">
    <h3 style="color:#bd1e24;">Statistika ukupno prikupljenih doza krvi</h3><br>
        <section class="row text-center placeholders">
            <div class="col-6 col-sm-3 placeholder">
                <img src="{{ asset('images/a-.jpg') }}" width="150" height="200"  alt="Generic placeholder thumbnail">
                <br><br><h4>{!!$a_negative!!}</h4>
                <div class="text-muted">Ukupno prikupljeno doza krvne grupe A-</div>
            </div><!--/col-6 col-sm-3 placeholder-->
            <div class="col-6 col-sm-3 placeholder">
                <img src="{{ asset('images/a+.jpg') }}" width="150" height="200"  alt="Generic placeholder thumbnail">
                <br><br><h4>{!!$a_positive!!}</h4>
                <span class="text-muted">Ukupno prikupljeno doza krvne grupe A+</span>
            </div><!--/col-6 col-sm-3 placeholder-->
            <div class="col-6 col-sm-3 placeholder">
                <img src="{{ asset('images/b-.jpg') }}" width="150" height="200"  alt="Generic placeholder thumbnail">
                <br><br><h4>{!!$b_negative!!}</h4>
                <span class="text-muted">Ukupno prikupljeno doza krvne grupe B-</span>
            </div><!--/col-6 col-sm-3 placeholder-->
            <div class="col-6 col-sm-3 placeholder">
                <img src="{{ asset('images/b+.jpg') }}" width="150" height="200"  alt="Generic placeholder thumbnail">
                <br><br><h4>{!!$b_positive!!}</h4>
                <span class="text-muted">Ukupno prikupljeno doza krvne grupe B+</span>
            </div><!--/col-6 col-sm-3 placeholder-->
            <div class="col-6 col-sm-3 placeholder">
                <img src="{{ asset('images/0-.jpg') }}" width="150" height="200"  alt="Generic placeholder thumbnail">
                <br><br><h4>{!!$zero_negative!!}</h4>
                <span class="text-muted">Ukupno prikupljeno doza krvne grupe 0-</span>
            </div><!--/col-6 col-sm-3 placeholder-->
            <div class="col-6 col-sm-3 placeholder">
                <img src="{{ asset('images/0+.jpg') }}" width="150" height="200"  alt="Generic placeholder thumbnail">
                <br><br><h4>{!!$zero_positive!!}</h4>
                <span class="text-muted">Ukupno prikupljeno doza krvne grupe 0+</span>
            </div><!--/col-6 col-sm-3 placeholder-->
            <div class="col-6 col-sm-3 placeholder">
                <img src="{{ asset('images/ab-.jpg') }}" width="150" height="200"  alt="Generic placeholder thumbnail">
                <br><br><h4>{!!$ab_negative!!}</h4>
                <span class="text-muted">Ukupno prikupljeno doza krvne grupe AB-</span>
            </div><!--/col-6 col-sm-3 placeholder-->
            <div class="col-6 col-sm-3 placeholder">
                <img src="{{ asset('images/ab+.jpg') }}" width="150" height="200"  alt="Generic placeholder thumbnail">
                <br><br><h4>{!!$ab_positive!!}</h4>
                <span class="text-muted">Ukupno prikupljeno doza krvne grupe AB+</span>
            </div><!--/col-6 col-sm-3 placeholder-->
        </section>
    </div><!--/col-sm-10-->
    <div class="col-sm-2"></div>
</div><!--/row-->
</div><!--/container-fluid-->
<br><br>
@endsection