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
        return $this->hasMany('App\Comment', 'post_id', 'id')->latest(); 
    }

    public function getTotalNumberOfComments(){
        return $this->hasMany('App\Comment', 'post_id', 'id')->count(); 
    }

}
