<?php

namespace App\Http\Controllers\Users;

use Auth; 
use Image; 
use App\About; 
use App\Location;
use App\Club; 
use App\Record; 

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//use App\Traits\PhotoUploadTrait;

class AccountController extends Controller
{

    //use App\Traits\PhotoUploadTrait;

    public function show()
    {
        $clubs = Club::all();
        $locations = Location::all(); 
        return view('settings.account', compact('clubs', 'locations'));
    }

    public function update(Request $request)
    {
        if(request('password'))
        {
            $this->validate(request(), [
                'password' => 'confirmed|min:6'
            ]);
            Auth::user()->password = bcrypt(request('password'));
            Auth::user()->save(); 
        }

        if(request('about')){
            $this->validate(request(), [
                'about' => 'min:10'
            ]);
            if(!Auth::user()->about){
                return About::create([
                    'id' => Auth::user()->id,
                    'body' => request('about'),
                ]);
            }
            else{
                $about = Auth::user()->about;
                $about->body = request('about');
                $about->save(); 
            }
        }

        if(request('status')){
            Auth::user()->status_id = request('status');
            Auth::user()->save(); 
        }

        if(request('location')){
            Auth::user()->location_id = request('location');
            Auth::user()->save(); 
        }

        if(request('club')){
            Auth::user()->club_id = request('club');
            Auth::user()->save(); 
        }

        if(request('wins')){
            if(!Auth::user()->record){
                $record = new Record; 
                $record->id = Auth::user()->id; 
                $record->wins = request('wins'); 
                $record->loses = 0;
                $record->save(); 
            }
            else{
                $record = Record::find(Auth::user()->id); 
                $record->wins = request('wins');
                $record->save(); 
            }

        }

        if(request('loses')){
            if(!Auth::user()->record)
            {
                $record = new Record; 
                $record->id = Auth::user()->id; 
                $record->loses = request('loses'); 
                $record->wins = 0;
                $record->save(); 
            }
            else
            {
                $record = Record::find(Auth::user()->id); 
                $record->loses = request('loses');
                $record->save(); 
            }
        }

        if($request->hasFile('avatar')){
            //profilePhotoUpload($request->file('avatar'));
        }

        flash('Great Job Profile Successfully Updated'); 
        return redirect()->back(); 
    }
}