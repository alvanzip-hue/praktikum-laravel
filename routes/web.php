<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);

Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/update/{id}', [MahasiswaController::class, 'update']);

Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'destroy']);

// Rute ini otomatis mencakup seluruh fungsi CRUD untuk Anggota.
// Data Kartu Anggota ikut terkelola di dalam rute ini melalui controller terintegrasi.
Route::resource('anggota', AnggotaController::class);