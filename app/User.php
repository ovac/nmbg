<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'address',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getNameAttribute()
    {
        return $this->attributes['name'] ?: $this->first_name . ' ' . $this->last_name;
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function social()
    {
        return $this->hasOne(Social::class);
    }

    public function orders()
    {
        return $this->hasMany(TicketOrder::class);
    }

    public function subscription()
    {
        return $this->hasMany(Subscribtion::class);
    }

    public function personalPictures()
    {
        return $this->hasMany(PersonalPicture::class);
    }

    public function isSubscribed()
    {
        return $this->subscription()->whereDate('created_at', '<', now()->addYears(1))->count();
    }
}
