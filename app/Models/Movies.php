<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    // Model properties and methods
    protected $casts = [
        'show_times' => 'array', // Cast show_times to an array
    ];

    protected $fillable = ['title', 'genre', 'duration', 'description', 'image_url', 'rating', 'show_times', 'language'];
}
