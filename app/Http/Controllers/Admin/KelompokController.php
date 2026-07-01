<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\KelompokRequest;
use App\Models\Kelompok;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class KelompokController extends Controller
{
    public function edit(): Response
    {
        return Inertia::render('admin/kelompok/form', [
            'kelompok' => Kelompok::query()->firstOrNew([]),
        ]);
    }

    public function update(KelompokRequest $request): RedirectResponse
    {
        $kelompok = Kelompok::query()->firstOrNew([]);
        $kelompok->fill($request->validated())->save();

        return to_route('admin.kelompok.edit')->with('success', 'Identitas kelompok diperbarui.');
    }
}
