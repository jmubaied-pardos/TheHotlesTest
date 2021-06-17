<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function doLogin(Request $request)
    {
        $rules = [
            'email'    => 'required|email',
            'password' => 'required|string',
        ];

        $validator = Validator::make($request->input(), $rules);

        if ($validator->fails()) {
            echo 'ERROR FIELDS MISSING';
        } else {

            // create our user data for the authentication
            $userdata = [
                'email'    => $request->get('email'),
                'password' => $request->get('password'),
            ];

            // attempt to do the login
            if (Auth::attempt($userdata)) {
                echo 'SUCCESS!';
            } else {
                echo 'NOT LOGIN';
            }

        }
    }

    public function doLogout()
    {
        Auth::logout();
        echo 'LogoOut';
    }
}
