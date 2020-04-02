<?php

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

Route::get('/', function () {return view('guest.index');});
Route::get('/about-us', function () {return view('guest.about-us');});
Route::get('/service-one', function () {return view('guest.service-one');});
Route::get('/service-two', function () {return view('guest.service-two');});
