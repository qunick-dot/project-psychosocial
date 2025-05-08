<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'content',
        'rating',
        'image_path',
        'is_approved',
        'email'
    ];
}
