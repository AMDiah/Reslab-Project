<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('/home');
});

//admin

   
    Route::get('/admin/login', [AdminController::class, 'login'])->name('login');
    Route::post('/admin/login', [AdminController::class, 'loginPost'])->name('login');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/peminjaman', [AdminController::class, 'peminjamanAdmin'])->name('peminjamanAdmin');

  
    
// Route::get('/admin/dashboard', [AppController::class, 'dashboard'])->name('dashboard');
// Route::get('/admin/login', [AppController::class, 'login'])->name('login');

//route navbar

//    
Route::get('/home', [AppController::class, 'home'])->name('home');
Route::get('/landing', [AppController::class, 'landing'])->name('landing');
Route::get('/praktikum', [AppController::class, 'praktikum'])->name('praktikum');
Route::get('/navb', [AppController::class, 'navb'])->name('navb');
Route::get('/footer', [AppController::class, 'footer'])->name('footer');
Route::get('/informasi', [AppController::class, 'informasi'])->name('informasi');
Route::get('/profil', [AppController::class, 'profil'])->name('profil');
Route::get('/peminjaman', [AppController::class, 'peminjaman'])->name('peminjaman');

//route halaman peminjman
Route::get('/peminjamanta', [AppController::class, 'peminjamanta'])->name('peminjamanta');
Route::get('/formta', [AppController::class, 'formta'])->name('formta');
Route::get('/peminjamannonta', [AppController::class, 'peminjamannonta'])->name('peminjamannonta');
Route::get('/formnonta', [AppController::class, 'formnonta'])->name('formnonta');

//route halaman praktikum
Route::get('/rangkaianlistrik', [AppController::class, 'rl'])->name('rl');
Route::get('/par', [AppController::class, 'par'])->name('par');
Route::get('/sistemtertanam', [AppController::class, 'sister'])->name('sister');

Route::get('/formnonta2', [AppController::class, 'formnonta2'])->name('formnonta2');

//transaksi
Route::get('/admin/transaksi', [AppController::class, 'index'])->name('transaksi.index');
Route::post('/admin/transaksi/{id}/approve', [AppController::class, 'approve'])->name('transaksi.approve');
Route::post('/admin/transaksi/{id}/reject', [AppController::class, 'reject'])->name('transaksi.reject');
Route::post('/admin/transaksi/{id}/process', [AppController::class, 'process'])->name('transaksi.process');