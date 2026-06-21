<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/penduduk', [PendudukController::class, 'index']);
Route::get('/surat',[KelurahanController::class,'daftarSurat']);