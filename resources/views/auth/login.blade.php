@extends('layouts.auth')

@section('title','Prijava')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:#cc0000;"><b>Prijava</b></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" style="border-color:#852f31;" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!--/form-group row-->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Lozinka</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" style="border-color:#852f31;" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><!--/form-group row-->

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Zapamti me
                                    </label>
                                </div>
                            </div>
                        </div><!--/form-group row-->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    Prijava
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-light" href="{{ route('password.request') }}">
                                        Zaboravili ste lozinku?
                                    </a>
                                @endif
                            </div>
                        </div><!--/form-group row-->
                    </form>
                </div><!--card-body-->
            </div><!--/card-->
        </div><!--/col-md-8-->
    </div><!--/row justify-content-center-->
</div><!--/container-->
@endsection
