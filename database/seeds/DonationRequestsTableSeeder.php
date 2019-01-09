<?php

use Illuminate\Database\Seeder;
use App\DonationRequests;
class DonationRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Donation Request 1
        DonationRequests::create([
            'donor_id' => 2,
            'trans_dept_id'=> 6,
            'wanted_date' => '2019-06-06',
            'approved' => 1
        ]); 
        
        // Donation Request 2
        DonationRequests::create([
            'donor_id' => 3,
            'trans_dept_id'=> 6,
            'wanted_date' => '2019-05-06',
            'approved' => 1
        ]);

        // Donation Request 3
        DonationRequests::create([
            'donor_id' => 3,
            'trans_dept_id'=> 6,
            'wanted_date' => '2019-07-06',
            'approved' => 0
        ]);

        // Donation Request 4
        DonationRequests::create([
            'donor_id' => 2,
            'trans_dept_id'=> 7,
            'wanted_date' => '2019-07-06',
            'approved' => 2
        ]);

        // Donation Request 4
        DonationRequests::create([
            'donor_id' => 3,
            'trans_dept_id'=> 7,
            'wanted_date' => '2019-07-08',
            'approved' => 2
        ]);

         // Donation Request 5
         DonationRequests::create([
            'donor_id' => 3,
            'trans_dept_id'=> 6,
            'wanted_date' => '2019-03-08',
            'approved' => 0
        ]);

        // Donation Request 6
        DonationRequests::create([
            'donor_id' => 3,
            'trans_dept_id'=> 6,
            'wanted_date' => '2019-08-08',
            'approved' => 1
        ]);

        // Donation Request 7
        DonationRequests::create([
            'donor_id' => 3,
            'trans_dept_id'=> 6,
            'wanted_date' => '2019-09-09',
            'approved' => 2
        ]);
    }
}
