<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penduduk;
use App\Models\Surat;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penduduk::updateOrCreate(
            ['nik' => '3507123456780001'],
            ['nama' => 'Budi Santoso', 'jk' => 'L', 'alamat' => 'Jl. Merdeka No. 10, RT 01 RW 01']
        );

        Penduduk::updateOrCreate(
            ['nik' => '3507123456780002'],
            ['nama' => 'Siti Khotimah', 'jk' => 'P', 'alamat' => 'Jl. Mawar No. 100, RT 09 RW 05']
        );

        Penduduk::updateOrCreate(
            ['nik' => '3507123456780003'],
            ['nama' => 'Justin Timberlek', 'jk' => 'L', 'alamat' => 'Jl. Kawi No. 11, RT 05 RW 01']
        );

        Penduduk::updateOrCreate(
            ['nik' => '3507123456780004'],
            ['nama' => 'Lisa Parlina', 'jk' => 'P', 'alamat' => 'Jl. Sultan Agung No. 15, RT 09 RW 07']
        );

        Penduduk::updateOrCreate(
            ['nik' => '3507123456780011'],
            ['nama' => 'Sutris Larakan', 'jk' => 'L', 'alamat' => 'Jl. Merdeka No. 11, RT 01 RW 01']
        );

        Penduduk::updateOrCreate(
            ['nik' => '3507123456780018'],
            ['nama' => 'Listina Ayuni', 'jk' => 'P', 'alamat' => 'Jl. Mawar No. 09, RT 06 RW 09']
        );
    }
}
