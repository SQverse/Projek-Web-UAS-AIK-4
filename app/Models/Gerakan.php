<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gerakan extends Model
{
    protected $table = 'gerakan';

    protected $fillable = [
        'kategori_id',
        'urutan',
        'nama',
        'slug',
        'deskripsi',
        'gambar_url',
        'video_url',
    ];

    protected $casts = [
        'urutan' => 'integer',
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function bacaan(): HasMany
    {
        return $this->hasMany(Bacaan::class)->orderBy('urutan');
    }
}
