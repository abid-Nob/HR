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
    return view('Home.welcome');
});
Route::get('about',function () {
    return view('Home.about');
});
Route::get('stdadmission',function () {
    return view('Home.stdadmit_form');
});

Route::get('allstdinfo',function () {
    return view('Home.allstd');
});

Route::get('allstudent','student@index');

