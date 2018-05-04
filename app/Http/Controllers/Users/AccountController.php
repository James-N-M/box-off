<?php

namespace App\Http\Controllers\Users;

use Auth; 
use Image; 
use App\About; 
use App\Location;
use App\Club; 

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function show()
    {
        $clubs = Club::all();
        $locations = Location::all(); 
        //return $locations; 
        return view('settings.account', compact('clubs', 'locations'));
    }

    public function update(Request $request)
    {
        if($request->get('password'))
        {
            $this->validate(request(), [
                'password' => 'confirmed|min:6'
            ]);
            Auth::user()->password = bcrypt($request->input('password'));
            Auth::user()->save(); 
        }

        if($request->get('about')){
            $this->validate(request(), [
                'about' => 'min:10'
            ]);
            if(!Auth::user()->about){
                return About::create([
                    'id' => Auth::user()->id,
                     'body' => $request->get('about'),
                ]);
            }
            else{
                $about = Auth::user()->about;
                $about->body = $request->get('about');
                $about->save(); 
            }
        }

        if($request->get('status')){
            Auth::user()->status_id = $request->get('status');
            Auth::user()->save(); 
        }

        if($request->get('location')){
            Auth::user()->location_id = $request->get('location');
            Auth::user()->save(); 
        }

        if($request->get('club')){
            Auth::user()->club_id = $request->get('club');
            Auth::user()->save(); 
        }


        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar'); 
            $filename = time() . '.' . $avatar->getClientOriginalExtension(); 
            Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename));

            Auth::user()->avatar = $filename; 
            Auth::user()->save(); 
        }

        return redirect()->back(); 
    }
}