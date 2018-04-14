<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post(){
        $this->hasOne('App\Post', 'post_id', 'id'); 
    }

    public function user(){
        return $this->hasOne('App\User','id', 'user_id'); 
    }

}
