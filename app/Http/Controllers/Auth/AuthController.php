<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Sentinel;
use Response;

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
     * Accepts user inputs.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginCheck(Request $request)
    {
        $credentials['email'] = $request->input('username');
        $credentials['password'] = $request->input('password');
        $result = Sentinel::authenticate($credentials);

        return Response::json($result);
    }

    /**
     * Displays a new login form.
     *
     * @return \Illuminate\Http\Response //this will be added later
     */
    public function create()
    {
         return view('');
    }

    /**
     * Create record with the form fileds.
     *
     * @return \Illuminate\Http\Response //this will be added later
     */
    public function store(Request $request)
    {
        $credentials['email'] = $request->input('username');
        $credentials['password'] = $request->input('password');
        $result = Sentinel::authenticate($credentials);

        return Response::json($result);
    }
}
