<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SearchController;
use App\Models\Comic;
use App\Models\Post;
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

Route::get('/', [PostController::class, 'index']);
Route::get('/preview/{post:slug}', [PostController::class, 'show']);
Route::get('/search', [SearchController::class, 'index']);
Route::get('/search', [SearchController::class, 'store']);


Route::get('/login', function () {
    return view('Auth.index');
});



Route::get('/komik', function () {
    return view('comic');
});

// Route::get('/search', function () {
//     return view('search');
// });