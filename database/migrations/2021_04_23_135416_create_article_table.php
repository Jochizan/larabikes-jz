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
      $table->bigIncrements('id');
      $table->bigInteger('category_id');
      $table->string('name', 255);
      $table->text('description');
      $table->decimal('price', 11, 2);
      $table->integer('stock');
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
