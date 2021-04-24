<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesArticlesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('article_sale', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->bigInteger('sale_id');
      $table->bigInteger('article_id');
      $table->integer('amount');
      $table->decimal('sub_price', 10, 2);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('sale_article');
  }
}
