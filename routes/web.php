<?php

use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Pimpinan\PermohonanController;
use Illuminate\Support\Facades\Auth;
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
    return view('layouts.login');
});

Auth::routes();

// Page Error

Route::get('/Page Not Found', [App\Http\Controllers\HomeController::class, 'error'])->name('error');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('Admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->middleware('admin')->name('admin.home');


// Pimpinan
Route::get('Pimpinan/home', [App\Http\Controllers\HomeController::class, 'pimpinan'])->middleware('pimpinan')->name('pimpinan.home');

// index Data Pegawai
Route::get('Pimpinan/DataPegawai', [App\Http\Controllers\Pimpinan\PegawaiController::class, 'index'])->middleware('pimpinan')->name('pimpinan.pegawai');

// Add Data Pegawai
Route::get('Pimpinan/Tambah/DataPegawai', [App\Http\Controllers\Pimpinan\PegawaiController::class, 'create'])->middleware('pimpinan')->name('pimpinan.add');

Route::post('Pimpinan/Simpan/DataPegawai', [App\Http\Controllers\Pimpinan\PegawaiController::class, 'store'])->middleware('pimpinan')->name('pimpinan.simpan');

// Edit Data Pegawai
Route::get('Pimpinan/Edit/DataPegawai/{id}', [App\Http\Controllers\Pimpinan\PegawaiController::class, 'edit'])->middleware('pimpinan')->name('pimpinan.edit');

Route::post('Pimpinan/Update/DataPegawai/{id}', [App\Http\Controllers\Pimpinan\PegawaiController::class, 'update'])->middleware('pimpinan')->name('pimpinan.update');

// Delete Data Pegawai
Route::delete('Pimpinan/Hapus/DataPegawai/{id}', [App\Http\Controllers\Pimpinan\PegawaiController::class, 'destroy'])->middleware('pimpinan')->name('pimpinan.delete');
// End Data Pegawai

// Akun pegawai
Route::get('Pimpinan/Data-Akun-Pegawai', [App\Http\Controllers\Pimpinan\AkunPegawaiController::class, 'index'])->middleware('pimpinan')->name('akun.index');

Route::get('Pimpinan/Data-Akun-Pegawai/add', [App\Http\Controllers\Pimpinan\AkunPegawaiController::class, 'create'])->middleware('pimpinan')->name('akun.add');

// Data Permohonan
Route::resource('Data-Permohonan', PermohonanController::class)->middleware('pimpinan');

// End Pimpinan

// Akses Admin

Route::get('Admin/Data-Peromohonan', [App\Http\Controllers\Admin\PermohonanController::class, 'index'])->middleware('admin')->name('permohonan.index');

// Add Permohonan
Route::get('Admin/Tambah/DataPermohonan', [App\Http\Controllers\Admin\PermohonanController::class, 'create'])->middleware('admin')->name('permohonan.add');

// save permohonan
Route::post('Admin/Simpan/DataPermohonan', [App\Http\Controllers\Admin\PermohonanController::class, 'store'])->middleware('admin')->name('permohonan.simpan');

// Edit Permohonan
Route::get('Admin/Edit/DataPermohonan/{id}', [App\Http\Controllers\Admin\PermohonanController::class, 'edit'])->middleware('admin')->name('permohonan.edit');

Route::post('Admin/update/DataPermohonan/{id}', [App\Http\Controllers\Admin\PermohonanController::class, 'update'])->middleware('admin')->name('permohonan.update');

// Delete Permohonan
Route::delete('Admin/Hapus/DataPermohonan/{id}', [App\Http\Controllers\Admin\PermohonanController::class, 'destroy'])->middleware('admin')->name('permohonan.delete');

// Detail Permohonan
Route::get('Admin/Edit/DataPermohonan/Detail/{id}', [App\Http\Controllers\Admin\DetailController::class, 'edit'])->name('permohonan.detail');

// Arsip Permohonan
Route::get('Admin/Arsip/Permohonan', [App\Http\Controllers\Admin\ArsipController::class, 'index'])->name('permohonan.arsip');

Route::get('Admin/Arsip/Cetak/Permohonan', [App\Http\Controllers\Admin\CetakController::class, 'cetak'])->name('permohonan.print');
// End Akses Admin
