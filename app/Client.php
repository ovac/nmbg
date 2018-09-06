<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'token',
        'avatar',
        'address',
    ];

    public function orders()
    {
        return $this->hasMany(TicketOrder::class);
    }

    public function tickets()
    {
        return $this->orders();
    }
}
