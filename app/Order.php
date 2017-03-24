<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function orderMessages()
  {
    return $this->hasMany('App\orderMessages');
  }

  public function products()
  {
    return $this->belongsToMany('App\Product', 'ordered_products');
  }
}
