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
})->name('home-page');
Route::get('/prodotti', function () {
    $pasta = config('pasta');
    $data = ['formati' => $pasta];
    return view('prodotti', $data);
})->name('prodotti');
Route::get('/news', function () {
    $notizie = config('notizie');
    $data = ['news' => $notizie];
    return view('news', $data);
})->name('news');