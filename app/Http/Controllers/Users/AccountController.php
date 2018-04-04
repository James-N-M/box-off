<?php

namespace App\Http\Controllers\Users;

use Auth; 
use Image; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('settings.account', compact('user'));
    }

    public function update(Request $request)
    {
        if($request->get('password')){
            echo 'has password';
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