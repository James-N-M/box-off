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
            'about' => '',
            'location' => '',
            'club' => '',
        ]);

        $user->update($attributes);

        return redirect()->back();
    }
}
