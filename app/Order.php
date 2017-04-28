<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Firebase\SyncsWithFirebase;

class Order extends Model
{
  use SyncsWithFirebase;
  protected $appends = ['price','products'];
  
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
    return $this->belongsToMany('App\Product', 'ordered_products')->withPivot('quantity');
  }
  
  public function price()
  {
    $price = 0;
    foreach ($this->products as $product) {
      $price += $product->price * $product->pivot->quantity;
    }
    return $price;
  }
  
  public function getPriceAttribute()
    {
        return $this->price();
    }
    
    public function getProductsAttribute()
    {
        return $this->products()->get();
    }
}