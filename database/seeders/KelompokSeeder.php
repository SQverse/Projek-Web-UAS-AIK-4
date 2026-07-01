<?php

namespace Database\Seeders;

use App\Models\Kelompok;
use Illuminate\Database\Seeder;

class KelompokSeeder extends Seeder
{
    public function run(): void
    {
        Kelompok::updateOrCreate(
            ['nama_kelompok' => 'Kelompok 2'],
            [
                'prodi' => 'Manajemen Bisnis Syariah — Fakultas Agama Islam',
                'mata_kuliah' => 'Pengembangan Aplikasi Web (Praktikum Pemrograman Web)',
                'dosen' => 'Dedy Susanto, S.Pd.I., M.M.',
                'universitas' => 'Universitas Muhammadiyah Pontianak',
            ],
        );
    }
}
