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
    // return view('welcome');
    return view('e-learning');
});

Route::get('/smartUI', function () {
    // return view('welcome');
    return view('smartUI');
});

Route::get('/test', function () {
    // return view('welcome');
    return view('test');
});

Route::get('/homesmart', function () {
    // return view('welcome');
    return view('homesmart');
});