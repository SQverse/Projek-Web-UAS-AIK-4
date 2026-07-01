<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $fillable = [
        'slug',
        'nama',
        'deskripsi',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function gerakan(): HasMany
    {
        return $this->hasMany(Gerakan::class)->orderBy('urutan');
    }
}
