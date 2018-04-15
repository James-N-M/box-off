<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Post; 
use App\Comment;
use App\User; 
use App\Event; 
use App\Match; 
use App\Status; 
use App\Location; 
use App\Club; 

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function getPosts(){
        $posts = Post::select( DB::raw('count(MONTHNAME(created_at)) as `count`'),DB::raw('MONTHNAME(created_at) month'))
        ->where('created_at', '>=' , Carbon::now()->subMonth(12))
        ->groupBy('month')
        ->get();
        return $posts; 
    }

    public function getComments(){
        $comments = Comment::select( DB::raw('count(MONTHNAME(created_at)) as `count`'),DB::raw('MONTHNAME(created_at) month'))
        ->where('created_at', '>=' , Carbon::now()->subMonth(12))
        ->groupBy('month')
        ->get();
        return $comments; 
    }

    public function getUsers(){
        $users = User::select( DB::raw('count(MONTHNAME(created_at)) as `count`'),DB::raw('MONTHNAME(created_at) month'))
        ->where('created_at', '>=' , Carbon::now()->subMonth(12))
        ->groupBy('month')
        ->get();
        return $users; 
    }

    public function getEvents(){
        $events = User::select( DB::raw('count(MONTHNAME(created_at)) as `count`'),DB::raw('MONTHNAME(created_at) month'))
        ->where('created_at', '>=' , Carbon::now()->subMonth(12))
        ->groupBy('month')
        ->get();
        return $events; 
    }

    public function getMatches(){
        $matches = User::select( DB::raw('count(MONTHNAME(created_at)) as `count`'),DB::raw('MONTHNAME(created_at) month'))
        ->where('created_at', '>=' , Carbon::now()->subMonth(12))
        ->groupBy('month')
        ->get();
        return $matches; 
    }

    public function getLocations(){
        $locations = User::select( DB::raw('count(MONTHNAME(created_at)) as `count`'),DB::raw('MONTHNAME(created_at) month'))
        ->where('created_at', '>=' , Carbon::now()->subMonth(12))
        ->groupBy('month')
        ->get();
        return $locations; 
    }

    public function getClubs(){
        $clubs = User::select( DB::raw('count(MONTHNAME(created_at)) as `count`'),DB::raw('MONTHNAME(created_at) month'))
        ->where('created_at', '>=' , Carbon::now()->subMonth(12))
        ->groupBy('month')
        ->get();
        return $clubs; 
    }



}
