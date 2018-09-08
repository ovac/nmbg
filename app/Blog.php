<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'url',
        'tags',
        'entry',
        'title',
        'image',
        'video',
        'template',
        'is_published',
        'seo_keywords',
        'seo_description',
    ];
}
