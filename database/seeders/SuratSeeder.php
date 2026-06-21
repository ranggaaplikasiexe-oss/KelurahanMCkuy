<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penduduk;
use App\Models\Surat;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mengambil sampel penduduk pertama dari database
        $warga = Penduduk::all();
        
        Surat::updateOrCreate(
            ['nomor_surat' => '001/MK/2026'],
            [
                'jenis_surat' => 'Surat Keterangan Usaha (SKU)',
                'tanggal_ajuan' => '2026-05-15',
                'penduduk_id' => $warga[0]->id
            ]
        );

        Surat::updateOrCreate(
            ['nomor_surat' => '002/MK/2026'],
            [
                'jenis_surat' => 'Surat Pengantar SKCK',
                'tanggal_ajuan' => '2026-05-18',
                'penduduk_id' => $warga[1]->id
            ]
        );

        Surat::updateOrCreate(
            ['nomor_surat' => '003/MK/2026'],
            [
                'jenis_surat' => 'Surat Pengantar SKCK',
                'tanggal_ajuan' => '2026-05-18',
                'penduduk_id' => $warga[2]->id
            ]
        );

        Surat::updateOrCreate(
            ['nomor_surat' => '004/MK/2026'],
            [
                'jenis_surat' => 'Surat Pengantar SKCK',
                'tanggal_ajuan' => '2026-05-18',
                'penduduk_id' => $warga[3]->id
            ]
        );
        
    }
}
