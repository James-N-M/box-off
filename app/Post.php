<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function user(){
        return $this->hasOne('App\User','id', 'user_id'); 
    }

    public function comments(){
        // return $this->hasMany('App\Comment', 'id', 'post_id'); 
    }


    
}
