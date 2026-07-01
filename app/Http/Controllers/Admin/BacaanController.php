<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BacaanRequest;
use App\Models\Bacaan;
use App\Models\Gerakan;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class BacaanController extends Controller
{
    public function create(Gerakan $gerakan): Response
    {
        return Inertia::render('admin/bacaan/form', [
            'gerakan' => $gerakan->only('id', 'nama', 'slug'),
            'bacaan' => null,
        ]);
    }

    public function store(BacaanRequest $request, Gerakan $gerakan): RedirectResponse
    {
        $gerakan->bacaan()->create($request->validated());

        return to_route('admin.gerakan.edit', $gerakan)->with('success', 'Bacaan ditambahkan.');
    }

    public function edit(Bacaan $bacaan): Response
    {
        $bacaan->load('gerakan:id,nama,slug');

        return Inertia::render('admin/bacaan/form', [
            'gerakan' => $bacaan->gerakan->only('id', 'nama', 'slug'),
            'bacaan' => $bacaan,
        ]);
    }

    public function update(BacaanRequest $request, Bacaan $bacaan): RedirectResponse
    {
        $bacaan->update($request->validated());

        return to_route('admin.gerakan.edit', $bacaan->gerakan_id)->with('success', 'Bacaan diperbarui.');
    }

    public function destroy(Bacaan $bacaan): RedirectResponse
    {
        $gerakanId = $bacaan->gerakan_id;
        $bacaan->delete();

        return to_route('admin.gerakan.edit', $gerakanId)->with('success', 'Bacaan dihapus.');
    }
}
