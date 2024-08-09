<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TentangProgramController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [RegisterController::class, 'index'])->name('register');




Route::get('/beritaWisata', function(){
    return view('user.berita-wisata.index');
});


Route::get('/objekWisata', function(){
    return view('user.objek-wisata.index');
});

Route::get('/detailobjekWisata', function(){
    return view('user.objek-wisata.detail');
});

Route::prefix('admin')->group(function(){
    Route::get('/destinasi', [App\Http\Controllers\AdminDestinasiController::class, 'AdminDestinationView'])->name('AdminDestinationView');
    Route::get('/destinasiStore', [App\Http\Controllers\AdminDestinasiController::class, 'AdminDestinationStore'])->name('AdminDestinationStore');
    Route::post('/createDestinasi', [App\Http\Controllers\AdminDestinasiController::class, 'StoreDestination'])->name('destinations.store');
    Route::delete('/destinasi/{destinasi}', [App\Http\Controllers\AdminDestinasiController::class, 'softDelete'])->name('destinasi.softDelete');
    Route::get('/destinasi/{id}/edit', [App\Http\Controllers\AdminDestinasiController::class, 'edit'])->name('destinasi.edit');
    Route::put('/destinasi/{id}', [App\Http\Controllers\AdminDestinasiController::class, 'update'])->name('destinasi.update');
    });

