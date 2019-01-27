@extends('layouts.app')

@section('title','Početna stranica')

@section('content')
<div class="container-fluid">
  <!-- Bootstrap Carousel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('images/first_slider.PNG') }}" alt="First slide">
      </div><!--/carousel-item active-->
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/second_slide.jpg') }}" alt="Second slide">
      </div><!--/carousel-item-->
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('images/third_slide.PNG') }}" alt="Third slide">
      </div><!--/carousel-item-->
    </div><!--/carusel-inner-->

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!--/carousel slide-->
</div><!--/container-fluid-->

</br></br>

<div class="container-fluid" id="about">
  <div class="row">
    <div class="col-sm-6">
      <div class="card" style="background-color:#F5F5DC;">
        <div class="container"></br>
          <div class="card-title"><h3 style="color:#bd1e24;">Zašto darivati krv?</h3></div>
          <div class="card-text"><h5 class="text-dark">
            Darivanjem krvi možete spasiti tuđe živote. </br></br>
            Jedna darovana doza krvi može spasiti čak tri života. </br></br>
            Mnogi ljudi danas ne bi bili živi da netko nije bio velikodušan i darovao im svoju krv.</br></br>
            Svakog dana je potrebno više od 6.000 doza krvi za liječenje bolesnika u Hrvatskoj i BiH. </br>
            Svake godine nam je potrebno otprilike 200.000 novih donora.</br><br>
            Većina ljudi dobi od 17 do 65 godina može dati krv.</br>
            Oko polovice naših sadašnjih donora ima preko 45 godina.</br>
            Zato nam je potrebno više mladih ljudi (starijih od 17 godina) da počnu davati krv, kako bismo bili sigurni da ćemo u budućnosti imati dovoljno zaliha krvi.<br></br>
            Saznaj tko može darovati krv, te pošalji zahtjev ukoliko si u mogućnosti. <br>
            Ukoliko želite otkazati zahtjev za donaciju, molimo vas da to učinite 3 dana prije zakazanog termina, kako bismo Vam mogli ponuditi drugi termin. <br><br>
            Trebamo više donora svih krvnih grupa i tipova. <br> <br></h5>
            <h5 class="p-3 mb-2 bg-danger text-white">Registrirajte se kao dobrovoljni darivatelj krvi i rezervirajte termin za darivanje krvi, te tako pomozite nekome komu je vaša pomoć potrebna već danas. <br>
          </div><!--/card-text-->
        </div><!--/container-->
      </div><!--/card-->
    </div><!--/col-sm-6-->
    <div class="col-sm-6">
      <div class="card" style="background-color:#F5F5DC;">
        <div class="container"></br>
          <div class="card-title"><h3 style="color:#bd1e24;">Tko može darivati krv?</h3></div>
          <div class="card-text"><h5 class="text-dark">
            Većina ljudi može dati krv. Možete dati krv ako: <br><br>
            <i class="fa fa-check"></i> Ste zdravi i u formi <br>
            <i class="fa fa-check"></i> Imate između 50kg i 160kg <br>
            <i class="fa fa-check"></i> Imate između 17 do 66 godina starosti (ili imate preko 70 godina, a dali ste krv u posljednje dvije godine) <br><br>
            <h4 style="color:#bd1e24;">Koliko često se može darivati krv?</h4>
            <h5 class="text-dark">Muškarci mogu dati krv svakih 12 tjedana, dok žene mogu dati krv svakih 16 tjedana. <br><br></h5>
            <h4 style="color:#bd1e24;">Najčešći razlozi zbog kojih možete biti odbijeni kao dobrovoljni darivatelji:</h4>
            <h5 class="text-dark">
              <i class="fa fa-check"></i> Ako primate medicinsko ili bolničko liječenje <br>
              <i class="fa fa-check"></i> Ako uzimate lijekove <br>
              <i class="fa fa-check"></i> Nakon tetoviranja ili piercinga <br>
              <i class="fa fa-check"></i> Tijekom i nakon trudnoće <br>
              <i class="fa fa-check"></i> Ako se osjećate bolesno <br>
              <i class="fa fa-check"></i> Ako imate rak <br>
              <i class="fa fa-check"></i> Nakon primanja krvi, krvnih pripravaka ili organa <br><br>
            </h5>
            <h5 class="p-3 mb-2 bg-danger text-white">Ukoliko smatrate da ispunjavate sve potrebne uvjete, možete se pokušati registrirati kao dobrovoljni darivatelj krvi. <br><br> <a href="{{ route('questionnaire') }}" class="btn btn-light">Registriraj se</a> <h5>
          </div><!--/card-text-->
        </div><!--/container-->
      </div><!--/card-->
    </div><!--/col-sm-6-->
  </div><!--/row-->
</div><!--/container-fluid--><br>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="container" style="background-color:#F5F5DC;"><br>
          <div class="card-text">
          <h5 class="text-dark">
            Ukoliko ste uspješno rezervirali svoj termin za darivanje krvi, ovdje možete preuzeti <i><b> "Upitnik za darivatelja" </b> </i> <br><br>
            <a href="{{asset('download/Upitnik za darivatelje krvi.docx')}}" class="btn btn-danger btn-lg btn-block" download><i class="fa fa-download"></i> <i>Upitnik za darivatelje.docx</i></a> <br>
            Preuzmite upitnik i popunite ga na dan darivanja, te uštedite vrijeme koje biste proveli ispunjavajući upitnik nakon dolaska u transfuziološku ustanovu. <br><br>
            </h5>
          </div><!--/card-text-->
        </div><!--/container-->
      </div><!--/card-->
    </div><!--/col-sm-6-->
    <div class="col-sm-6">
      <center>
        <img class="d-block w-100" src="{{ asset('images/blood_saves_life.jpg') }}" alt="Blood image">
      </center>
    </div><!--/col-sm-6-->
  </div><!--/row-->
</div><!--/container-fluid-->
@endsection
