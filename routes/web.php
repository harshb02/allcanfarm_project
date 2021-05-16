<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/availableland', function () {
    return view('available-land');
});
Route::get('/contactus', function () {
    return view('contact-us');
});
Route::get('/ourfarm', function () {
    return view('ourfarm');
});
Route::get('/sustainability', function () {
    return view('sustainability');
});