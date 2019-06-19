<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;

class reservationsController extends Controller
{
  public function index()
  {
    $location_data = App\Location::all();
    return view('reservations')->with('locations', $location_data);
  }
  public function availableCat()
  {
    if(isset($_GET["reservation"]) && isset($_GET["return"]) && isset($_GET["loc"]))
    {
      $table = App\Category::all();
      return view('available')->with('categories', $table);
    }
    else
    {
      header('HTTP/1.0 400 Forbidden', true, 400);
      die("ERROR 400: BAD REQUEST");
    }
  }
}
