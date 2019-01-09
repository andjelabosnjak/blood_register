<nav class="navbar navbar-toggleable-md navbar-light bg-danger" style="background-color: #d9534f !important; height:30px;"></nav>
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
                        <a class="btn btn-danger" href="{{ route('login') }}" style="background-color:	#d9534f;" >Prijava</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger" href="{{ route ('questionnaire')}}" style="margin-left:10px;background-color:	#d9534f;">Registracija</a>
                    </li>    
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <b> {{ Auth::user()->name }} </b> <span class="caret"></span>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item list-group-item active list-group-item-action list-group-item-danger" href="{{route('myProfile')}}"> Moj profil </a>
                            <a class="dropdown-item list-group-item active list-group-item-action list-group-item-danger" href="{{ route('logout') }}"
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
        </div><!--/collapse navbar-collapse-->
    </div><!--/container-->
</nav>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto" style="padding-left:60px;">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route ('home')}}" style="color:#bd1e24;"><b>Početna stranica</b></a>
            </li>

            @if(!Auth::check() || auth()->user()->user_type == 'donor' )
            <li class="nav-item">
                <b><a class="nav-link" href="{{ route('aboutbloodgiving') }}" style="color:#bd1e24;">Zašto darivati krv?</a></b>
            </li>

            <li class="nav-item">
                <b><a class="nav-link" href="{{ route('aboutbloodgiving') }}" style="color:#bd1e24;">Tko može darivati krv?</a></b>
            </li>
            <li class="nav-item">
                <b><a class="nav-link" href="{{ route('wheredonate') }}" style="color:#bd1e24;">Gdje darivati krv?</a> </b>
            </li>
            @endif

            @auth
            @if(auth()->user()->user_type==='donor')
            <li class="nav-item">
                <b><a class="nav-link" href="{{ route('mydonationrequests') }}" style="color:#bd1e24;">Moje rezervacije</a></b>
            </li> 
            <li class="nav-item">
                <b><a class="nav-link" href="{{ route('mydonorarrivals') }}" style="color:#bd1e24;">Moja darivanja</a></b>
            </li>    
            @endif
            @endauth
                                        
            @auth
            @if(auth()->user()->user_type=='transfuziology_dept' || auth()->user()->user_type=='donor')
            <li class="nav-item">
                <div class="dropdown"><!--Notifications dropdown menu-->
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#bd1e24;"><b>Obavijesti <span class="badge badge-danger">{!!Auth()->user()->unreadNotifications()->count()!!}</span> </b></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @php($notifications=Auth()->user()->notifications()->get())
                            @if(count($notifications)> 0)
                            @foreach($notifications as $note)
                                <a class="dropdown-item" href="#">
                                    <div class="dropdown-item list-group-item active list-group-item-action list-group-item-danger">
                                        {!! $note->data['message'] !!}
                                        {{$note->markAsRead()}}
                                    </div>
                                </a>
                            @endforeach
                        @else
                        <a class="dropdown-item" href="#">
                            <div class="dropdown-item list-group-item active list-group-item-action list-group-item-danger">
                                Nije pronađena niti jedna obavijest.
                            </div>
                        </a>
                        @endif
                    </div><!--/dropdown-menu-->
                </div><!--/dropdown-->
            </li>
            @endif

            @if(auth()->user()->user_type=='transfuziology_dept')
            <li class="nav-item">
                <div class="dropdown"><!--Requests dropdown menu-->
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#bd1e24;"><b>Zahtjevi </b></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item list-group-item active list-group-item-action list-group-item-danger" href="{{ route('pendingdonationrequests')}}"> <i class="fa fa-check-square-o" aria-hidden="true"></i> Zahtjevi na čekanju</a>
                        <a class="dropdown-item list-group-item active list-group-item-action list-group-item-danger" href="{{ route('alldonationrequests')}}"><i class="fa fa-history" aria-hidden="true"></i> Pregled povijesti svih zahtjeva</a>
                    </div><!--/dropdown-menu-->
                </div><!--/dropdown-->
            </li>

            <li class="nav-item">
                <div class="dropdown"><!--Arrivals dropdown menu-->
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#bd1e24;"><b>Dolasci </b></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item list-group-item active list-group-item-action list-group-item-danger" href="{{ route('createnewdonorarrival')}}"><i class="fa fa-plus" aria-hidden="true"></i>  Dodaj novi dolazak</a>
                        <a class="dropdown-item list-group-item active list-group-item-action list-group-item-danger" href="{{ route('alldonorarrivals')}}"><i class="fa fa-history" aria-hidden="true"></i>  Pregled povijesti svih dolazaka</a>
                    </div><!--/dropdown-menu-->
                </div><!--/dropdown-->
            </li>  
            <li class="nav-item">
                <b><a class="nav-link" href="{{ route('bloodstatistics') }}" style="color:#bd1e24;">Statistika ukupno prikupljenih doza krvi</a></b>
            </li>   
            @endif
            @endauth
        </ul>  
    </div><!--/collapse navbar-collapse-->
</nav>