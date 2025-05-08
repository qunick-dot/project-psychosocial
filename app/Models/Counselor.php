<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Counselor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'title', 
        'specialty', 
        'description', 
        'image',
        'slug',
        'is_active'
    ];

    /**
     * Boot function from Laravel.
     */
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($counselor) {
            if (empty($counselor->slug)) {
                $counselor->slug = Str::slug($counselor->name);
            }
        });
    }
}
