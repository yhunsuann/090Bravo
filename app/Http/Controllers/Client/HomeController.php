<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{  
  /**
   * index
   *
   * @return void
   */
  public function index()
  {
    return view('client.index');
  }
  
  /**
   * aboutUs
   *
   * @return void
   */
  public function aboutUs()
  {
    return view('client.about-us');
  }
}
