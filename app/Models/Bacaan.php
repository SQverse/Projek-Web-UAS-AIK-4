<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Bacaan extends Model
{
    protected $table = 'bacaan';

    protected $fillable = [
        'gerakan_id',
        'urutan',
        'judul',
        'teks_arab',
        'teks_latin',
        'terjemahan',
        'audio_url',
        'sumber',
    ];

    protected $casts = [
        'urutan' => 'integer',
    ];

    public function gerakan(): BelongsTo
    {
        return $this->belongsTo(Gerakan::class);
    }
}
