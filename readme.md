<h1>Registar dobrovoljnih darivatelja krvi - BLOOD REGISTER</h1>
<hr>

## Instalacija

```
$ git clone https://github.com/andjelabosnjak/blood_register.git
$ cd blood_register
$ cp .env.example .env and fill your database information
$ composer install
$ php artisan key:generate
$ php artisan migrate
$ php artisan db:seed
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
-Omogućiti prijavu i odjavu na sustav;
-Omogućiti unos i izmjenu podataka (npr. prilikom ažuriranja osobnih podataka);
-Sustav treba zapamtiti registracijske podatke (ime, korisničko ime, email, lozinku..);
-Razlikovati prijavu korisnika (administrator, tranfuziološke ustanove, darivatelji) preko korisničkog imena ili e-maila;
-Upozoriti korisnika ako postoji neka greška (netočan unos i slično);
-Prikazati obavijest nakon izvršenog zadatka (npr. nakon uspješne registracije);
-Omogućiti administratoru funkcije: dodavanje, brisanje, pregled, uređivanje darivatelja i transfuzioloških ustanova;
-Omogućiti darivatelju funkcije: slanje zahtjeva, pregled tranfuzioloških ustanova, pregled povijesti darivanje;
-Omogućiti transfuziološkim ustanovama funkcije: pregled zaliha krvi, prijavljenih korisnika, zahtjeva i svih darivanja, dodavanje novog darivanja;


Detalji za prijavu u sustav
Administrator (na zahtjev - nije dodano iz sigurnosnih razloga)
Transfuzijska ustanova u/p: skbmo@mail.com/123456
Darivatelj u/p: andjela@mail.com/123456
