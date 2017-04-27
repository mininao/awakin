<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Ferus\FairPayApi\FairPay;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'provider', 'provider_id','fairpay_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders()
    {
      return $this->hasMany('App\Order');
    }
    
    public function balance()
    {
        $fairpay = new FairPay();
        $balance = $fairpay->api('/student/balance', 'get', array(
            'api_key' => config('fairpay_key'),
            'client_id' => $this->fairpay_id
        ))->balance;
        return $balance;
    }
}