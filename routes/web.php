<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterController;
use App\Http\Controllers\NationalController;
use App\Http\Controllers\FeatureController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Halo

Route::get('/home', function () {
    return view('home',
["title" => "home"]);
});

Route::get('international',[
    InterController::class, 'inter'
]);

Route::get('international/{detail}',[
    InterController::class, 'detail'
]);

Route::get('national',[
    NationalController::class, 'national'
]);

Route::get('national/{detail}',[
    NationalController::class, 'detail'
]);

Route::get('feature',[
    FeatureController::class, 'feature'
]);

Route::get('feature/{detail}',[
    FeatureController::class, 'detail'
]);