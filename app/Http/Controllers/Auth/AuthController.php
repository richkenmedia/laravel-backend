<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Sentinel;

class AuthController extends Controller
{

    /**
     * Displays Login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
        //
    }

    /**
     * Check User form.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginCheck(Request $request)
    {
        $credentials['email'] = $request->input('username');
        $credentials['password'] = $request->input('password');
        $result = Sentinel::authenticate($credentials);
        if($result):
            return $result;
        else:
            return 'false';
        endif;
    }
}
