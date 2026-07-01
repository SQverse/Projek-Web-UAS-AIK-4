<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Identitas kelompok yang tampil di header tiap halaman (F-08).
     */
    public function up(): void
    {
        Schema::create('kelompok', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelompok');
            $table->string('prodi');
            $table->string('mata_kuliah');
            $table->string('dosen');
            $table->string('universitas')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kelompok');
    }
};
