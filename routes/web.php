<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {return view('index');});
Route::get('/about', function () {return view('about');});
Route::get('/services', function () {return view('services');});
Route::get('/booking', function () {return view('booking');});
Route::get('/team', function () {return view('team');});
Route::get('/404', function () {return view('404');});
Route::get('/contact', function () {return view('contact');});

