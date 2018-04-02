<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function user(){
        return $this->hasMany('App\User','location_id', 'id'); 
    }
}
