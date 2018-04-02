<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status_id', 'club_id', 'location_id' , 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function location(){
        return $this->hasOne('App\Location', 'id', 'location_id'); 
    }

    public function status(){
        return $this->hasOne('App\Status', 'id', 'status_id'); 
    }

    public function club(){
        return $this->hasOne('App\Club', 'id', 'club_id'); 
    }
}
