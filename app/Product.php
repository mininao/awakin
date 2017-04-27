<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Product extends Model
{
  use CrudTrait;
  
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'title', 'description', 'price','foodType'
  ];
  
  public function orders()
  {
    return $this->belongsToMany('App\Order', 'ordered_products')->withPivot('quantity');;
  }
}