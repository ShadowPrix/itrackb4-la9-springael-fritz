<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'genre', 'rating', 'year', 'is_available'];

    protected function casts(): array
    {
        return [
            'year' => 'integer',
            'is_available' => 'boolean',
            'rating' => 'decimal:1',
        ];
    }

}