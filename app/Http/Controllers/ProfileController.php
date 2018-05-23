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
            // it doesnt exist add a flash message for not having about me set 
            flash('<div style="text-align:center;">Please visit the <a href="/settings">Settings Page</a> to set About Me</div>');
            return redirect()->back(); 
        }

        if(!$user->record){
            flash('<div style="text-align:center;">Please visit the <a href="/settings">Settings Page</a> to set your Win / Lose Record</div>');
            return redirect()->back(); 
        }

        
        return view('profile.show', compact('user'));
    }
}
