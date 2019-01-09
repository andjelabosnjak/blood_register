<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','birth_date', 'email','phone_number','address','city', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function donation_requests_donor(){

        return $this->hasMany('App\DonationRequests','donor_id','id');

    }

    public function donation_requests_trans_dept(){

        return $this->hasMany('App\DonationRequests','trans_dept_id','id');

    }
}
