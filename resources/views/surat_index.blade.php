@extends('layouts.app')

@section('content')
    <div class="container mt-1 card p-4">
        <h3 class="text-center">Daftar Pengajuan Surat Kelurahan</h3>
        <table class="table table-hover table-bordered mt-1">
            <thead>
                <tr>
                    <th>No Surat</th>
                    <th>Jenis Surat</th>
                    <th>Nama Pemohon</th>
                    <th>NIK Pemohon</th>
                    <th>Tanggal Ajuan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($semuaSurat as $s)
                <tr>
                    <td>{{ $s->nomor_surat }}</td>
                    <td>{{ $s->jenis_surat }}</td>
                    <td>{{ $s->penduduk->nama }}</td>
                    <td>{{ $s->penduduk->nik }}</td>
                    <td>{{ $s->tanggal_ajuan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
@endsection