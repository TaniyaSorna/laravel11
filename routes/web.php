<?php

use App\Http\Controllers\demoController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('/uploads', [demoController::class, 'info']);
Route::post('/upload', [testController::class, 'check']);


Route::view('/', 'layouts.app');
Route::view('/home', 'pages.home')->name('index');
Route::view('/about', 'pages.about')->name('about');
