<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CarController extends Controller
{
    public function index() {
        $cars = Car::all();

        return view('cars.index', compact('cars'));
    }

    public function show($id) {
        $car = Car::find($id);
        if (!$car) {
            throw new ModelNotFoundException();
        }

        return view('cars.show', compact('car'));
    }
}
