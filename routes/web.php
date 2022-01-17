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
    return view ('Home');
});

Route::get('/about', function () {
    return view ('About', [
        "nama" => "Isabella Christiani Rumbewas",
        "email" => "bella.rumbewas05@gmail.com",
        "gambar" => "isabellarumbewas01.jpeg"
    ]);
});

Route::get('/gallery', function () {
    return view ('Gallery');
});