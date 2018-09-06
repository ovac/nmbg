<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'datetime',
    ];

    protected $fillable = [
        'date',
        'name',
        'price',
    ];

    public function orders()
    {
        return $this->hasMany(TicketOrder::class);
    }
}
