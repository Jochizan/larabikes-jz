<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
  protected $table = 'sale';

  protected $fillable = [
    'user_id',
    'key_transaction',
    'paypal_data',
    'status',
    'total_price'
  ];

  public function perfils()
  {
    return $this->belongsToMany("App\Article");
  }
}
