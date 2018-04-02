<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function location(){
        return $this->hasOne('App\Location', 'id', 'location_id'); 
    }

    public function referee(){
        return $this->hasOne('App\User', 'id', 'referee_id'); 
    }

    public function doctor(){
        return $this->hasOne('App\User', 'id', 'doctor_id'); 
    }
}
