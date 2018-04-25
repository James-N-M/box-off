<?php

namespace App\Http\Controllers\Users;

use Auth; 
use Image; 
use App\About; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function show()
    {
        return view('settings.account');
    }

    public function update(Request $request)
    {
        
        if($request->get('password')){
            $this->validate(request(), [
                'password' => 'confirmed|min:6'
            ]);
            Auth::user()->password = bcrypt($request->input('password'));
            Auth::user()->save(); 
        }

        if($request->get('about')){
            $about = Auth::user()->about;
            $about->body = $request->get('about');  
            $about->save(); 
            Auth::user()->save(); 
        }

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar'); 
            $filename = time() . '.' . $avatar->getClientOriginalExtension(); 
            Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename));

            Auth::user()->avatar = $filename; 
            Auth::user()->save(); 
        }

        return view('settings.account'); 
    }
}