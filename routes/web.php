<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\PlacesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [HomeController::class , 'index']);
Route::get('places/{slug}' , [PlacesController::class , 'detail']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
