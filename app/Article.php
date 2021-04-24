<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $table = 'article';

  protected $fillable = [
    'category_id',
    'description',
    'status',
    'price',
    'stock',
    'image',
    'name'
  ];
}
