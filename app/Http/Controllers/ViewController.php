<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
  public function begin()
  {
    return view('login');
  }

  public function home()
  {
    return view('welcome');
  }

  public function aboutUs()
  {
    return view('aboutUs');
  }

  public function where()
  {
    return view('where');
  }

  public function forum()
  {
    return view('forum');
  }
}
