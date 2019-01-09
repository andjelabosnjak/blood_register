<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonorArrivals extends Model
{
    public function donor(){

        return $this->belongsTo('App\User','donor_id','id');
    }

    public function trans_dept(){
        
        return $this->belongsTo('App\User','trans_dept_id','id');
    }
}
