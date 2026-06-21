<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SuratController; // 1. SUDAH DI-IMPORT

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/penduduk', [PendudukController::class, 'index']);

// 2. Cukup gunakan resource saja (otomatis mencakup GET /surat untuk index)
Route::resource('surat', SuratController::class);