<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return redirect('/sekolah');
});

// Halaman daftar siswa
Route::get('/sekolah', [SiswaController::class, 'index'])->name('sekolah.siswa');

// Halaman form tambah siswa
Route::get('/sekolah/create', [SiswaController::class, 'create'])->name('sekolah.create');

// Proses simpan data siswa
Route::post('/sekolah', [SiswaController::class, 'store'])->name('sekolah.store');
