<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; 
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function getPosts(){
        $posts = Post::all();
        return $posts; 
    }
}
