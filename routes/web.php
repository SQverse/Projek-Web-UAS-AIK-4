<?php

use App\Http\Controllers\Admin\BacaanController;
use App\Http\Controllers\Admin\GerakanController;
use App\Http\Controllers\Admin\KelompokController;
use App\Http\Controllers\TuntunanController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Publik — tuntunan sholat.
Route::get('/', [TuntunanController::class, 'index'])->name('home');
Route::get('/{kategori}', [TuntunanController::class, 'kategori'])
    ->where('kategori', 'dewasa|anak')
    ->name('tuntunan.kategori');
Route::get('/{kategori}/{gerakan}', [TuntunanController::class, 'show'])
    ->where('kategori', 'dewasa|anak')
    ->name('tuntunan.gerakan');

// Admin — manajemen konten (auth).
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('kelompok', [KelompokController::class, 'edit'])->name('kelompok.edit');
        Route::put('kelompok', [KelompokController::class, 'update'])->name('kelompok.update');

        Route::resource('gerakan', GerakanController::class)->except('show');
        Route::resource('gerakan.bacaan', BacaanController::class)
            ->except('show', 'index')
            ->shallow();
    });
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
