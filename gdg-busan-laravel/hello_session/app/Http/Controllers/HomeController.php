<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

//App\Http\Controllers\Auth

class HomeController extends Controller
{
  public function index(){

    if (Auth::check()) {
      flash( Auth()->user()->name . ' 님 안녕하세요!' );
    }

    return view('home');
  }
}
