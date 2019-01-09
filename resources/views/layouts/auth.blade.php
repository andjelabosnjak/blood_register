<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="position: relative;min-height: 100%; ">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blood Register - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!--Internal CSS-->
    <style>
        .form-control:hover, .form-control:focus {
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        box-shadow: none !important;
        border: solid 2px;},
    .nav-link:hover,  .nav-link:focus {
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        box-shadow: none !important;
        border: solid 2px  #bd1e24;}
    </style> 

</head>
<body style="background-image: url({{ asset('images/zuz.PNG') }});background-size:cover; background-repeat:no-repeat;background-position: center center;">
    <div id="app">
        <!-- red navbar-->
        <nav class="navbar navbar-toggleable-md navbar-light bg-danger" style="background-color: #d9534f !important; height:30px;"></nav>
        <!-- white navbar-->
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/imgg.jpg') }}" alt=""> <i><b>Blood Register</b></i>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                        
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="btn btn-danger" href="{{ route('login') }}" style="background-color:	#d9534f;">Prijava</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-danger" href="{{ route('questionnaire') }}" style="margin-left:10px;background-color:	#d9534f;">Registracija</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    Odjava
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
            </div>
        </nav><!--/white navbar-->

        <main class="py-4">
            <!-- Include success/error messages from resources/inc folder -->
            <div class="w-100 p-3">
                @include('inc.messages')
            </div>
                @yield('content')
        </main>
    </div><!-- /app-->
    <!-- Footer -->
    <footer class="footer bg-danger" style="position: absolute;bottom: 0;width: 100%;height: 40px;line-height: 40px;">
        <!-- Copyright -->
        <div class="footer-copyright text-center text-white">© 2019p Copyright:
            <a class="text-light" href="http://fsre.sum.ba/naslovnica/" target="_blank"><i>PIS - TIM4</i></a>
        </div>
        <!-- /Copyright -->
    </footer>
    <!-- /Footer -->
</body>  
</html>
