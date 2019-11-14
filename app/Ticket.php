<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function events(){
        return $this->belongsTo(Event::class);
    }
}
