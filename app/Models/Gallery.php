<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'type',
        'image_url',
        'description',
        'uploader',
        'is_featured',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];
}
