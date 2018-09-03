<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = [
        'facebook',
        'google',
        'instagram',
        'linkedin',
        'pinterest',
        'twitter',
    ];
}
