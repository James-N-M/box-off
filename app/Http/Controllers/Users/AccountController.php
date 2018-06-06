<?php

namespace App\Http\Controllers\Users;

use Auth;
use Image;
use App\Club;
use App\About;
use App\Record;
use App\Location;
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
        $user = request()->user();

        $attributes = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'type' => '',
            'location' => '',
            'club' => '',
            'about' => 'min:10'
        ]);

        $user->update($attributes);

        return redirect()->back();
    }
}
