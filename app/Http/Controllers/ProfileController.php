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
            flash('<div style="text-align:center;">Please Head to <a href="#">this is a href</a> to set About me for</div>');
            return redirect()->back(); 
        }

        return view('profile.show', compact('user'));
    }
}
