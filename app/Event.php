<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     //Table name
     protected $table='events';
    
     //Primary key
     public $primarykey='id';
     //Timestamps
     public $timestamps=true;

     public function tickets(){
          return $this->hasMany(Ticket::class);
        }
 
}
