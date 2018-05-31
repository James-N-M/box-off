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
        $user = request()->user();

        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'about' => '',
        ]);

        $user->update($attributes);

        flash('Great Job Profile Successfully Updated');
        return redirect()->back();
    }
}
