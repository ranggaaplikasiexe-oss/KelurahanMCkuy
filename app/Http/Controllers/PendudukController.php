<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;

class PendudukController extends Controller {
    public function index() {
        $penduduk = Penduduk::all();

        return view('penduduk', compact('penduduk'));
    }
}