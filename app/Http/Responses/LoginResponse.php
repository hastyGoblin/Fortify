<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Auth\StatefulGuard;
use App\Models\User;
use Auth;
use Laravel\Fortify\Http\Responses\LoginResponse as FortifyLoginResponse;

class LoginResponse extends FortifyLoginResponse
{
    public function _construct(){
        //
    }

    public function toResponse($request){

        return redirect()->route('/');
    }

}

