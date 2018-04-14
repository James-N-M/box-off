<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 

class PostController extends Controller
{
    public function store(Request $request){
        $post = new Post; 
        $post->title = $request->title; 
        $post->body = $request->body; 
        $post->user_id = $request->user_id; 

        $post->save(); 

        return redirect('/home');
    }
}
