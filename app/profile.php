<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        // Guardian // Information
        'guardian_sponcor_name',
        'guardian_occupation',
        'guardian_full_name',
        'guardian_address',
        'guardian_phone',
        'guardian_email',

        // Appearance
        'eye_color',
        'height',
        'width',
        'hobby',
        'weight',
        'hair_color',

        // Personal
        'statistics',
        'role_model',
        'place_of_birth',
        'favourite_color',
        'state_of_origin',
        'favourite_artiste',
        'name_of_institution',
        'local_government_area',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
