<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class DonationRequests extends Model
{
    public function donor(){

        return $this->belongsTo('App\User','donor_id','id');

    }

    public function trans_dept(){

        return $this->belongsTo('App\User','trans_dept_id','id');
    }

    public function checkdays(){

        $wanted_date = Carbon::parse($this->wanted_date);
        $today=Carbon::now();

        $check_days=$today->diffInDays($wanted_date,false);

        return $check_days;
    }
}
