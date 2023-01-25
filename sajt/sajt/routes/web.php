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

*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/action', function () {
    return view('action');
});
Route::get('/romantic', function () {
    return view('romantic');
});
Route::get('/comedy', function () {
    return view('comedy');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/documentary', function () {
    return view('documentary');
});
Route::get('/mybooklist', function () {
    return view('mybooklist');
});
Route::get('/kreirajKorisnika', function () {
    return view('kreirajKorisnika');
});
Route::get('/korisnici', function () {
    return view('korisnici');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/korisnici', [App\Http\Controllers\KorisniciController::class, 'index'])->name('korisnici');
Route::get('/korisnici/kreiraj', [App\Http\Controllers\KorisniciController::class, 'create'])->name('kreirajKorisnika');
Route::get('/korisnici/store', [App\Http\Controllers\KorisniciController::class, 'store']);
Route::get('/korisnici/show/{id}', [App\Http\Controllers\KorisniciController::class, 'show']);
Route::get('/korisnici/edit/{id}', [App\Http\Controllers\KorisniciController::class, 'edit']);
Route::get('/korisnici/update/{id}', [App\Http\Controllers\KorisniciController::class, 'update']);
Route::get('/korisnici/delete/{id}', [App\Http\Controllers\KorisniciController::class, 'destroy']);


require __DIR__.'/auth.php';





