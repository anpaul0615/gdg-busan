<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

//App\Http\Controllers\Auth

class HomeController extends Controller
{
  public function index(){
    return view('home');
  }
}
