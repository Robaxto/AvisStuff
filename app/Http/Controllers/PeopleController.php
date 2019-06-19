<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller{
  public function index()
  {
    $table = \App\Category::paginate(1);
    return view('TestView')->with('categories', $table);
  }
}
