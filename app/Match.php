<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function event(){
        return $this->hasOne('App\Event', 'id', 'event_id');
    }

    public function winner(){
        return $this->hasOne('App\User', 'id', 'winner_id'); 
    }

    public function loser(){
        return $this->hasOne('App\User', 'id', 'loser_id'); 
    }
}
