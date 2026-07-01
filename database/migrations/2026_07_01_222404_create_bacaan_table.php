<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Bacaan yang menempel pada gerakan: 4 lapis Arab/Latin/terjemahan/audio (F-02, F-03).
     */
    public function up(): void
    {
        Schema::create('bacaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gerakan_id')->constrained('gerakan')->cascadeOnDelete();
            $table->unsignedSmallInteger('urutan')->default(1);
            $table->string('judul')->nullable();       // mis. "Doa Iftitah"
            $table->text('teks_arab')->nullable();
            $table->text('teks_latin')->nullable();
            $table->text('terjemahan')->nullable();
            $table->string('audio_url')->nullable();
            $table->string('sumber')->nullable();
            $table->timestamps();

            $table->index(['gerakan_id', 'urutan']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bacaan');
    }
};
