<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator; 
use App\User; 

class ProfileController extends Controller
{
    public function show($id){
        $user = User::find($id); 

        if(!$user->about){
            flash('<div style="text-align:center;">Please visit the <a href="/settings">Settings Page</a> to set About Me</div>');
            return redirect()->back(); 
        }
        
        return view('profile.show', compact('user'));
    }
}
