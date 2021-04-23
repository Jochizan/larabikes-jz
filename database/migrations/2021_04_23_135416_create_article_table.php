<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('article', function (Blueprint $table) {
      $table->bigIncrements('id_article');
      $table->bigInteger('id_category');
      $table->string('name', 255);
      $table->text('description');
      $table->decimal('price', 10, 2);
      $table->bigInteger('stock');
      $table->string('image', 255);
      $table->boolean('status');
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
    Schema::dropIfExists('article');
  }
}
