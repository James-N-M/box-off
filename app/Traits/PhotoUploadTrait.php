<?php

namespace App\Traits;

use Auth;
 
use Image; 

trait PhotoUploadTrait {

    public function profilePhotoUpload($photoFile) {
        $filename = time() . '.' . $avatar->getClientOriginalExtension(); 
        Image::make($avatar)->resize(300,300)->save( public_path('/uploads/avatars/' . $filename));
        Auth::user()->avatar = $filename; 
        Auth::user()->save(); 
    }

}
