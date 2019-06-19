<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
      echo "test";
      $table = Category::all();
      return view('categories.index')->with('categories', $table);
    }
}
