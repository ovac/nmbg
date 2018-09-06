<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketOrder extends Model
{
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
