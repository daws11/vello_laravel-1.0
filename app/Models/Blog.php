<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'type',
        'content_paragraphs', // Paragraf yang disimpan sebagai array JSON
        'date'
    ];

    protected $casts = [
        'content_paragraphs' => 'array', // Cast JSON menjadi array saat diakses
    ];
}
