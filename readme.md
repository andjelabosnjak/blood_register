<h1>Registar dobrovoljnih darivatelja krvi - BLOOD REGISTER</h1>
<hr>

```
<a href="http://bloodregister.000webhostapp.com/">Link na gotov projekt</a>
<h2>Kratki opis</h2>
Web aplikacija je prvenstveno namjenjena za dvije vrste korisnika - Darivatelje krvi i Transfuziološke ustanove. Pohrana podataka uključuje podatke poput povijesti dolazaka, razlozi nemogućnosti darivanja krvi, osobnih podataka darivatelja i slično. Darivateljima je olakšano pronalaženje važnih informacija vezanih za darivanje krvi. Također postoji mogućnost rezervacije termina koji odobrava transfuziološka ustanova.

Darivatelj ima uvid u:
-svoj profil
-povijest svojih darivanja
-dostupne transfuziološke ustanove

Transfuziološke ustanove imaju uvid u:
-osobne informacije darivatelja krvi
-trenutne zalihe krvi
-dosadašnja darivanja
-svoj profil s mogućnošću ažuriranja podataka
-zahtjeve za darivanjem krvi s mogućnošću prihvaćanja ili odbijanja darivatelja

Administrator posjeduje vlastiti panel i ima kontrolu nad cijelim sustavom.

Funkcionalni zahtjevi sustava:
<p>-Omogućiti prijavu i odjavu na sustav;</p>
<p>-Omogućiti unos i izmjenu podataka (npr. prilikom ažuriranja osobnih podataka);</p>
<p>-Sustav treba zapamtiti registracijske podatke (ime, korisničko ime, email, lozinku..);</p>
<p>-Razlikovati prijavu korisnika (administrator, tranfuziološke ustanove, darivatelji) preko korisničkog imena ili e-maila;</p>
<p>-Upozoriti korisnika ako postoji neka greška (netočan unos i slično);</p>
<p>-Prikazati obavijest nakon izvršenog zadatka (npr. nakon uspješne registracije);</p>
<p>-Omogućiti administratoru funkcije: dodavanje, brisanje, pregled, uređivanje darivatelja i transfuzioloških ustanova;</p>
<p>-Omogućiti darivatelju funkcije: slanje zahtjeva, pregled tranfuzioloških ustanova, pregled povijesti darivanje;</p>
<p>-Omogućiti transfuziološkim ustanovama funkcije: pregled zaliha krvi, prijavljenih korisnika, zahtjeva i svih darivanja, dodavanje novog darivanja;</p>


Detalji za prijavu u sustav
<p>Administrator (na zahtjev - nije dodano iz sigurnosnih razloga)</p>
<p>Transfuzijska ustanova u/p: skbmo@mail.com/123456</p>
<p>Darivatelj u/p: andjela@mail.com/123456</p>


## Instalacija

```
$ git clone https://github.com/andjelabosnjak/blood_register.git
$ cd blood_register
$ cp .env.example .env and fill your database information
$ composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
