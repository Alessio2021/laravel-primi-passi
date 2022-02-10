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
        'name' => 'Alessio',
        'lastname' => 'Pippo',
    ];

    return view('home',  $data);
})->name('home');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/contact', function () {

    $contacts = [
        'name' => ['pippo', 'pluto', 'paperino', 'paperina']
    ];
    return view('contact', $contacts);
})->name('contact');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

