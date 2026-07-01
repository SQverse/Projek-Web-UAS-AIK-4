<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Inertia\Inertia;
use Inertia\Response;

class TuntunanController extends Controller
{
    /**
     * Beranda: pilih mode pengguna (dewasa/anak).
     */
    public function index(): Response
    {
        $kategoriList = Kategori::query()
            ->withCount('gerakan')
            ->get(['id', 'slug', 'nama', 'deskripsi']);

        return Inertia::render('tuntunan/beranda', [
            'kategoriList' => $kategoriList,
        ]);
    }

    /**
     * Daftar gerakan sholat untuk satu mode (F-01).
     */
    public function kategori(Kategori $kategori): Response
    {
        $gerakan = $kategori->gerakan()
            ->withCount('bacaan')
            ->get(['id', 'slug', 'urutan', 'nama', 'deskripsi', 'gambar_url']);

        return Inertia::render('tuntunan/daftar', [
            'kategori' => $kategori->only('slug', 'nama', 'deskripsi'),
            'gerakanList' => $gerakan,
        ]);
    }

    /**
     * Detail satu gerakan + bacaannya, plus navigasi & daftar untuk autoplay
     * (F-02, F-03, F-04, F-05, F-06).
     */
    public function show(Kategori $kategori, string $gerakan): Response
    {
        $gerakan = $kategori->gerakan()
            ->with('bacaan')
            ->where('slug', $gerakan)
            ->firstOrFail();

        $daftar = $kategori->gerakan()->get(['slug', 'urutan', 'nama']);
        $index = $daftar->search(fn ($g) => $g->slug === $gerakan->slug);

        return Inertia::render('tuntunan/detail', [
            'kategori' => $kategori->only('slug', 'nama'),
            'gerakan' => $gerakan->only('slug', 'urutan', 'nama', 'deskripsi', 'gambar_url', 'video_url'),
            'bacaanList' => $gerakan->bacaan->map->only(
                'urutan', 'judul', 'teks_arab', 'teks_latin', 'terjemahan', 'audio_url', 'sumber'
            ),
            'daftar' => $daftar,
            'prev' => $index > 0 ? $daftar[$index - 1]->slug : null,
            'next' => $index < $daftar->count() - 1 ? $daftar[$index + 1]->slug : null,
        ]);
    }
}
