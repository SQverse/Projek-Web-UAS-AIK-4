<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Satu baris per gerakan sholat, milik satu kategori/mode (F-01, F-02).
     */
    public function up(): void
    {
        Schema::create('gerakan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained('kategori')->cascadeOnDelete();
            $table->unsignedSmallInteger('urutan');
            $table->string('nama');
            $table->string('slug');
            $table->text('deskripsi')->nullable();
            $table->string('gambar_url')->nullable();
            $table->string('video_url')->nullable();
            $table->timestamps();

            $table->unique(['kategori_id', 'urutan']);
            $table->unique(['kategori_id', 'slug']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gerakan');
    }
};
