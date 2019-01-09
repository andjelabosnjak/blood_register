<?php

use Illuminate\Database\Seeder;
use App\DonorArrivals;
class DonorArrivalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Donor Arrival 1
        DonorArrivals::create([
            'donor_id' => 3,
            'trans_dept_id'=> 6,
            'date' => '2018-08-08',
            'blood_group' => 'A+',
            'blood_presure' => '150/90',
            'hemoglobin_level' => '130',
            'status' => 'uspješno',
            'note' => 'Nije bilo nikakvih kontraindikacija!'
        ]);

          // Donor Arrival 2
          DonorArrivals::create([
            'donor_id' => 3,
            'trans_dept_id'=> 6,
            'date' => '2017-08-09',
            'blood_group' => 'A+',
            'blood_presure' => '130/90',
            'hemoglobin_level' => '140',
            'status' => 'uspješno',
            'note' => 'Nije bilo nikakvih kontraindikacija!'
        ]);

        // Donor Arrival 3
        DonorArrivals::create([
            'donor_id' => 3,
            'trans_dept_id'=> 6,
            'date' => '2018-03-03',
            'blood_group' => 'A+',
            'blood_presure' => '200/110',
            'hemoglobin_level' => '150',
            'status' => 'neuspješno',
            'note' => 'Visok tlak!'
        ]);

        // Donor Arrival 4
        DonorArrivals::create([
            'donor_id' => 3,
            'trans_dept_id'=> 6,
            'date' => '2018-06-03',
            'blood_group' => 'A+',
            'blood_presure' => '120/80',
            'hemoglobin_level' => '150',
            'status' => 'neuspješno',
            'note' => 'Popio brufen dan prije!'
        ]);

         // Donor Arrival 5
         DonorArrivals::create([
            'donor_id' => 2,
            'trans_dept_id'=> 6,
            'date' => '2018-06-03',
            'blood_group' => '0+',
            'blood_presure' => '120/80',
            'hemoglobin_level' => '150',
            'status' => 'neuspješno',
            'note' => 'Popio brufen dan prije!'
        ]);

         // Donor Arrival 3
         DonorArrivals::create([
            'donor_id' => 2,
            'trans_dept_id'=> 6,
            'date' => '2018-06-06',
            'blood_group' => '0+',
            'blood_presure' => '140/80',
            'hemoglobin_level' => '150',
            'status' => 'uspješno',
            'note' => 'Nije bilo nikakvih kontraindikacija!'
        ]);

        
    }
}
