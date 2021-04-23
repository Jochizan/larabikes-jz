<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('category', function (Blueprint $table) {
      $table->bigIncrements('id_category');
      $table->string('name', 255);
      $table->text('description');
      $table->boolean('status');
      $table->timestamps();
      // $table->cre
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('category');
  }
}
