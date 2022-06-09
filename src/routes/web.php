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
Route::get('/listBuku', [App\Http\Controllers\DashboardController::class, 'listBuku'])->name('listBuku');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
Route::get('/admin/buku', [App\Http\Controllers\BukuController::class, 'buku'])->name('buku');
Route::get('/admin/{buku}/hapusBuku', [App\Http\Controllers\BukuController::class, 'hapusBuku'])->name('hapusBuku');
Route::get('/admin/{buku}/editBuku', [App\Http\Controllers\BukuController::class, 'editBuku'])->name('editBuku');
Route::get('/admin/tambahBuku', [App\Http\Controllers\BukuController::class, 'tambahBuku'])->name('tambahBuku');
Route::get('/admin/anggota', [App\Http\Controllers\AnggotaController::class, 'anggota'])->name('anggota');
Route::get('/admin/{anggota}/hapusAnggota', [App\Http\Controllers\AnggotaController::class, 'hapusAnggota'])->name('hapusAnggota');
Route::get('/admin/{anggota}/editAnggota', [App\Http\Controllers\AnggotaController::class, 'editAnggota'])->name('editAnggota');
Route::get('/admin/tambahAnggota', [App\Http\Controllers\AnggotaController::class, 'tambahAnggota'])->name('tambahAnggota');
Route::get('/admin/peminjaman', [App\Http\Controllers\AdminController::class, 'peminjaman'])->name('peminjaman');
Route::get('/admin/laporan', [App\Http\Controllers\AdminController::class, 'laporan'])->name('laporan');

Route::post('/admin/simpanAnggota', [App\Http\Controllers\AnggotaController::class, 'simpanAnggota'])->name('simpanAnggota');
Route::post('/admin/{anggota}/updateAnggota', [App\Http\Controllers\anggotaController::class, 'updateAnggota'])->name('updateAnggota');
Route::post('/admin/storeBook', [App\Http\Controllers\BukuController::class, 'store'])->name('storeBook');
Route::post('/admin/{buku}/updateBuku', [App\Http\Controllers\BukuController::class, 'updateBuku'])->name('updateBuku');