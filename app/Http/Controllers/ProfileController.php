<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator; 
use App\User; 

class ProfileController extends Controller
{
    public function show($id){
        $user = User::find($id); 

        $rules = [
            'name' => 'min:20',
        ]; 

        $messages = [
            'min' => 'Please create an about me', 
        ];

        $validator = Validator::make($user->about->toArray(), $rules, $messages); 
        
        return $validator->errors(); // here it just returns a empty array 

        return view('profile.show', compact('user', 'validator'));
    }
}
