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

    <!--Internal style-->
    <style>
    .form-control:hover, .form-control:focus {
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        box-shadow: none !important;
        border: solid 2px #bd1e24;}
    .nav-link:hover {
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        box-shadow: none !important;
        border: solid 2px  #bd1e24;}
    </style> 
    
</head>
<body style="background-color:white; margin-bottom:40px;">
    <div id="app">
            <nav class="navbar navbar-toggleable-md navbar-light bg-danger" style="background-color: #d9534f !important; height:30px;"></nav>
        <!-- Include navbar from resources/inc folder -->
        <main class="py-4" style="margin-left:60px; margin-right:60px;">
            <!-- Include success/error messages from resources/inc folder -->
            <div class="w-100 p-3">
                @include('inc.messages')
            </div>
                @yield('content')
        </main><!--/main-->
    </div><!-- /app-->

    <!-- Footer -->
    <footer class="footer bg-danger" style="position: absolute;bottom: 0;width: 100%;height: 40px;line-height: 40px;">
        <!-- Copyright -->
        <div class="footer-copyright text-center text-white">© 2019 Copyright:
            <a class="text-light" href="http://fsre.sum.ba/naslovnica/" target="_blank"><i>PIS - TIM4</i></a>
        </div>
        <!-- /Copyright -->
    </footer>
    <!-- /Footer -->
</body>
</html>
