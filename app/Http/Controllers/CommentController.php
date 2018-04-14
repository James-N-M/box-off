<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment; 
class CommentController extends Controller
{
    public function store(Request $request){
        $comment = new Comment; 
        $comment->post_id = $request->post_id; 
        $comment->user_id = $request->user_id; 
        $comment->body = $request->comment; 

        $comment->save(); 

        return redirect('/post/1');
    }
}
