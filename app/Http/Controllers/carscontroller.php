<?php

namespace App\Http\Controllers;

use App\Car;

class carscontroller extends Controller
{
    //
    public function create()
    {
      //$table = Category::all();
      $table = Car::all();
      //return redirect()->route('cars.create');
      return view('cars.create')->with('categories', $table);
    }

    public function store(Request $request)
    {
        //Car::create(["maker" => $_POST['maker'], "year" => $_POST['year'], "model" => $_POST['model'], "category_id" => $_POST['category_id']]);
        Car::create($request->all());

        return;
    }

    public function category()
    {
      return $this->belongsTo('App\Car');
    }
}
