<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  protected $table = 'article';

  protected $primary_key = 'id_article';

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
