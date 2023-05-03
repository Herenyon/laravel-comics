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
    $data = [
        'comics' => config('db')
    ];
    return view('home', $data);
})->name('home');

Route::get('/comic', function () {
    $data = [
        'comics' => config('db')
    ];
    $artists = config('db.artists');
    return view('comic', $data, compact('artists'));
})->name('comic');
