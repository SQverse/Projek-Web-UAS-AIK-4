<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GerakanRequest;
use App\Models\Gerakan;
use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class GerakanController extends Controller
{
    public function index(): Response
    {
        $gerakan = Gerakan::query()
            ->with('kategori:id,slug,nama')
            ->withCount('bacaan')
            ->orderBy('kategori_id')
            ->orderBy('urutan')
            ->get(['id', 'kategori_id', 'urutan', 'nama', 'slug']);

        return Inertia::render('admin/gerakan/index', [
            'gerakanList' => $gerakan,
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('admin/gerakan/form', [
            'gerakan' => null,
            'kategoriList' => Kategori::all(['id', 'slug', 'nama']),
        ]);
    }

    public function store(GerakanRequest $request): RedirectResponse
    {
        Gerakan::create($request->validated());

        return to_route('admin.gerakan.index')->with('success', 'Gerakan ditambahkan.');
    }

    public function edit(Gerakan $gerakan): Response
    {
        $gerakan->load('bacaan');

        return Inertia::render('admin/gerakan/form', [
            'gerakan' => $gerakan,
            'kategoriList' => Kategori::all(['id', 'slug', 'nama']),
        ]);
    }

    public function update(GerakanRequest $request, Gerakan $gerakan): RedirectResponse
    {
        $gerakan->update($request->validated());

        return to_route('admin.gerakan.index')->with('success', 'Gerakan diperbarui.');
    }

    public function destroy(Gerakan $gerakan): RedirectResponse
    {
        $gerakan->delete();

        return to_route('admin.gerakan.index')->with('success', 'Gerakan dihapus.');
    }
}
