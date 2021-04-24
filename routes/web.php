<?php

use App\Sale;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
  '/',
  'ViewController@begin'
);

Route::get(
  '/home',
  'ViewController@home'
);

Route::get(
  '/aboutUs',
  'ViewController@aboutUs'
);

Route::get(
  '/where',
  'ViewController@where'
);

Route::get(
  '/forum',
  'ViewController@forum'
);

Route::get('/sale/{id}/article', function ($id) {
  $answer = Sale::find($id);

  foreach ($answer->perfils as $value) {
    return $value;
  }
});
