<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $name = "John Doe";
    $age = 22;
    return view('welcome', compact(['name', 'age']));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cars', [CarController::class, 'index',]);

Route::get('/cars/{car}', [CarController::class, 'show'])->name('car');
