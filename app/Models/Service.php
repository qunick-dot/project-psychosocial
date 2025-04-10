<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'why_it_matters',
        'approach_title',
        'approach_subtitle',
        'image',
        'approach_items',
        'faqs',
        'is_active',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $casts = [
        'approach_items' => 'array',
        'faqs' => 'array',
        'is_active' => 'boolean'
    ];

    // Auto-generate slug from title
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
