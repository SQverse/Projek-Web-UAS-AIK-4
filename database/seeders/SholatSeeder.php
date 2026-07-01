<?php

namespace Database\Seeders;

use App\Models\Bacaan;
use App\Models\Gerakan;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class SholatSeeder extends Seeder
{
    /**
     * Isi kategori (dewasa/anak), gerakan, dan bacaan dari data HPT.
     * Satu sumber data disajikan untuk kedua mode (F-07, F-09).
     */
    public function run(): void
    {
        $kategoriList = [
            'dewasa' => [
                'nama' => 'Dewasa',
                'deskripsi' => 'Penyajian teks penuh dan formal, disertai keterangan sumber rujukan.',
            ],
            'anak' => [
                'nama' => 'Anak-anak',
                'deskripsi' => 'Bahasa sederhana, terjemahan ringkas, dan penekanan visual ramah anak.',
            ],
        ];

        $gerakanData = require database_path('seeders/data/sholat.php');

        foreach ($kategoriList as $slug => $meta) {
            $kategori = Kategori::updateOrCreate(
                ['slug' => $slug],
                ['nama' => $meta['nama'], 'deskripsi' => $meta['deskripsi']],
            );

            foreach ($gerakanData as $g) {
                $gerakan = Gerakan::updateOrCreate(
                    ['kategori_id' => $kategori->id, 'slug' => $g['slug']],
                    [
                        'urutan' => $g['urutan'],
                        'nama' => $g['nama'],
                        'deskripsi' => $g['deskripsi'][$slug],
                        'gambar_url' => "/assets/gerakan/{$g['slug']}.jpg",
                        'video_url' => null,
                    ],
                );

                // Ganti seluruh bacaan gerakan agar seeder idempoten.
                $gerakan->bacaan()->delete();

                foreach ($g['bacaan'] as $i => $b) {
                    Bacaan::create([
                        'gerakan_id' => $gerakan->id,
                        'urutan' => $i + 1,
                        'judul' => $b['judul'],
                        'teks_arab' => $b['teks_arab'],
                        'teks_latin' => $b['teks_latin'],
                        'terjemahan' => $b['terjemahan'][$slug],
                        'audio_url' => "/assets/audio/{$g['slug']}-".($i + 1).'.mp3',
                        'sumber' => $b['sumber'],
                    ]);
                }
            }
        }
    }
}
