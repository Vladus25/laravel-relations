<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class HomeController extends Controller
{
  public function home() {

    $cars = Car::all();
    return view('pages.home', compact('cars'));
  }

  public function car($id) {
    $car = Car::findorFail($id);

    return view('pages.car', compact('car'));
  }

  public function create() {

    return view ('pages.create');
  }

  public function store(Request $request) {

    $validate = $request -> validate ([
      'team1' => 'required|max:128',
      'team2' => 'required|max:128',
      'point1' => 'required|numeric',
      'point2' => 'required|numeric',
      'result' => 'required|numeric',
    ]);

    $match = Match::create($validate);
    return redirect() -> route('match', $match -> id);
  }
}
