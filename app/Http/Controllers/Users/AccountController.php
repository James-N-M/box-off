<?php

namespace App\Http\Controllers\Users;

use Auth; 

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('settings.account', compact('user'));
    }

    public function update(Request $request, User $user)
    {

        // return redirect('settings/account');
    }
}