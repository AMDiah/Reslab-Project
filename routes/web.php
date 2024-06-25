<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [AppController::class, 'home'])->name('home');
Route::get('/landing', [AppController::class, 'landing'])->name('landing');
Route::get('/praktikum', [AppController::class, 'praktikum'])->name('praktikum');
Route::get('/navb', [AppController::class, 'navb'])->name('navb');
Route::get('/footer', [AppController::class, 'footer'])->name('footer');
Route::get('/informasi', [AppController::class, 'informasi'])->name('informasi');
Route::get('/profil', [AppController::class, 'profil'])->name('profil');
Route::get('/peminjaman', [AppController::class, 'peminjaman'])->name('peminjaman');


Route::get('/peminjamanta', [AppController::class, 'peminjamanta'])->name('peminjamanta');
Route::get('/formta', [AppController::class, 'formta'])->name('formta');
Route::get('/peminjamannonta', [AppController::class, 'peminjamannonta'])->name('peminjamannonta');
Route::get('/formnonta', [AppController::class, 'formnonta'])->name('formnonta');

Route::get('/rangkaianlistrik', [AppController::class, 'rl'])->name('rl');