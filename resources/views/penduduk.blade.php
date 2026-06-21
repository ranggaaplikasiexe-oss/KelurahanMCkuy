@extends('layouts.app')

@section('title', 'Data Penduduk')

@section('content')
    <div class="container mt-1 card p-3">
        <h3 class="text-center mb-3">Data Penduduk</h3>
        <div class="row justify-content-center">
            <div class="col-md-100">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>NIK</th>
                            <th>NAMA</th>
                            <th>JK</th>
                            <th>ALAMAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penduduk as $item)
                        <tr>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jk }}</td>
                            <td>{{ $item->alamat }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection