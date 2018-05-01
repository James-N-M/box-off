<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator; 
use App\User; 

class ProfileController extends Controller
{
    public function show($id){
        $user = User::find($id); 

        $validator = Validator::make($user->about->toArray(),[
            'body' => 'min:10',
        ]); 

        return view('profile.show', compact('user'));
    }
}
