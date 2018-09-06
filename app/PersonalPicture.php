<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalPicture extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'picture',
        'description',
        'short_description',
        'categories',
    ];
}
