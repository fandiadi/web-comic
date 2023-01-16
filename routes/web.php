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
    return view('home');
});

Route::get('/login', function () {
    return view('Auth.index');
});

Route::get('/preview', function () {
    return view('preview_komik');
});

Route::get('/komik', function () {
    return view('comic');
});

Route::get('/search', function () {
    return view('search');
});