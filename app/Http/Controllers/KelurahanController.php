<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Notifications\Action;
use App\Models\Penduduk;
use App\Models\Surat;

class KelurahanController extends Controller {
    public function index () {
        return view('layouts.app');
    }
    public function daftarSurat() {
    // Eager Loading relasi penduduk untuk menghemat query
    $semuaSurat = Surat::with('penduduk')->get();
    return view('surat_index', compact('semuaSurat'));
    }
}