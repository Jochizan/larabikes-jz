<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleArticle extends Model
{
  protected $table = 'sale_article';

  protected $fillable = [
    'venta_id',
    'article_id',
    'amount',
    'sub_price'
  ];
}
