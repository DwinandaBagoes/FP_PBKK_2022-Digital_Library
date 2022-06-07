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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
Route::get('/admin/buku', [App\Http\Controllers\BukuController::class, 'buku'])->name('buku');
Route::get('/admin/tambahBuku', [App\Http\Controllers\BukuController::class, 'tambahBuku'])->name('tambahBuku');
Route::get('/admin/anggota', [App\Http\Controllers\AdminController::class, 'anggota'])->name('anggota');
Route::get('/admin/peminjaman', [App\Http\Controllers\AdminController::class, 'peminjaman'])->name('peminjaman');
Route::get('/admin/laporan', [App\Http\Controllers\AdminController::class, 'laporan'])->name('laporan');

Route::post('/admin/storeBook', [App\Http\Controllers\BukuController::class, 'store'])->name('storeBook');