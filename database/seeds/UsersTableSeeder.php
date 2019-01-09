<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administrator
        User::create([
            'name' => 'Administrator',
            'birth_date' => '1996-01-01',
            'email' => 'admin@mail.com',
            'phone_number' => '063/139-463',
            'user_type' => 'admin',
            'address' => 'Bobanova Draga 88345 bb, Sovići',
            'city' => 'Grude',
            'password' => bcrypt('123456'),
            ]);

        //Donor 1
        User::create([
            'name' => 'Marko Kraljević',
            'birth_date' => '1996-01-25',
            'email' => 'marko@mail.com',
            'phone_number' => '063/139-487',
            'user_type' => 'donor',
            'address' => 'Bobanova Draga 88345 bb, Sovići',
            'city' => 'Grude',
            'password' => bcrypt('123456'),
            ]);

        //Donor 2
        User::create([
            'name' => 'Ivo Ivić',
            'birth_date' => '1995-01-25',
            'email' => 'ivo@mail.com',
            'phone_number' => '063/544-487',
            'user_type' => 'donor',
            'address' => 'Zrinjski Franskopana br.2, 88000 Mostar',
            'city' => 'Mostar',
            'password' => bcrypt('123456'),
            ]);

         //Donor 3
         User::create([
            'name' => 'Anđa Marić',
            'birth_date' => '1993-01-25',
            'email' => 'andja@mail.com',
            'phone_number' => '063/541-387',
            'user_type' => 'donor',
            'address' => 'Zrinjski Franskopana br.2, 88000 Mostar',
            'city' => 'Mostar',
            'password' => bcrypt('123456'),
            ]);

         //Donor 4
         User::create([
            'name' => 'Dalibor Marković',
            'birth_date' => '1992-12-12',
            'email' => 'dalibor@mail.com',
            'phone_number' => '063/546-457',
            'user_type' => 'donor',
            'address' => 'Ulica Kraljice Katarine 8b, 88000 Mostar',
            'city' => 'Mostar',
            'password' => bcrypt('123456'),
            ]);

          //Transfuziology dept 1
        User::create([
            'name' => 'Sveučilišna klinička bolnica Mostar - Zavod za transfuzijsku medicinu',
            'email' => 'skbmo@mail.com',
            'phone_number' => '036/336-500',
            'user_type' => 'transfuziology_dept',
            'address' => 'Kralja Tvrtka bb, 88000 Mostar',
            'city' => 'Mostar',
            'password' => bcrypt('123456'),
            ]);

         //Transfuziology dept 2
         User::create([
            'name' => 'Regionalni Medicinski Centar - Dr Safet Mujić - Služba za transfuziju',
            'email' => 'rmc@mail.com',
            'phone_number' => '036/503-160',
            'user_type' => 'transfuziology_dept',
            'address' => 'Maršala Tita 294, 88000 Mostar',
            'city' => 'Mostar',
            'password' => bcrypt('123456'),
            ]);
        
        //Transfuziology dept 3
         User::create([
            'name' => 'Univerzitetski klinički centar Tuzla - Poliklinika za transfuziologiju',
            'email' => 'ukct@mail.com',
            'phone_number' => ' 0038735/303-500',
            'user_type' => 'transfuziology_dept',
            'address' => 'Trnovac bb, 75 000 Tuzla',
            'city' => 'Tuzla',
            'password' => bcrypt('123456'),
            ]);
        
        //Transfuziology dept 4
         User::create([
            'name' => 'JU Kantonalna bolnica Zenica - Transfuzijski centar',
            'email' => 'jkbz@mail.com',
            'phone_number' => ' 0038735/303-500',
            'user_type' => 'transfuziology_dept',
            'address' => 'Crkvice 67, 72000 Zenica ',
            'city' => 'Zenica',
            'password' => bcrypt('123456'),
            ]);

            //Transfuziology dept 5
         User::create([
                'name' => 'Zavod za transfuzijsku medicinu
                Federacije Bosne i Hercegovine',
                'email' => 'zztmdbih@mail.com',
                'phone_number' => '+387 33 567 300',
                'user_type' => 'transfuziology_dept',
                'address' => 'Čekaluša 86, 71000 Sarajevo',
                'city' => 'Sarajevo',
                'password' => bcrypt('123456'),
                ]);
        
    }
}
