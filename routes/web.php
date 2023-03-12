<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookController;

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
    return view ('index' , [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "nama" => "Isabella Christiani Rumbewas",
        "email" => "bella.rumbewas05@gmail.com",
        "gambar" => "bebels.jpeg"
    ]);
});

// Route::get('/gallery', function () {
//     return view ('gallery', [
//         "title" => "Gallery"
//     ]);
// });

//Route::resource('/contacts', ContactController :: class );
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::post('/bukus/store', [BookController::class, 'store'])->name('bukus.store');
Route::get('/bukus/create', [BookController::class, 'create'])->name('bukus.create');
Route::get('/gallery', [BookController::class, 'gallery'])->name('gallery');
Route::get('/detail/{id}', [BookController::class, 'detail'])->name('detail');
Route::get('/searchbook', [BookController::class, 'searchbook'])->name('searchbook');




Auth::routes();

Route::group(['middleware' => ['auth']], function (){
    Route::get('/home', [App\Http\Controllers\BookController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');


    Route::get('/bukus/index', [BookController::class, 'index'])->name('bukus.index');
    Route::get('/bukus/{id}/edit', [BookController::class, 'edit'])->name('bukus.edit');
    Route::post('/bukus/{id}/update', [BookController::class, 'update'])->name('bukus.update');
    Route::get('/bukus/{id}/destroy', [BookController::class, 'destroy'])->name('bukus.destroy');
    Route::get('/exportpdf',[BookController::class, 'exportpdf'])->name('exportpdf');
    Route::get('/exportexcel',[BookController::class, 'exportexcel'])->name('exportexcel');
});


