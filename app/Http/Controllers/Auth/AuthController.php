<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\CreateUserRequest;
use Sentinel;
use Response;
use Redirect;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.index');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        return $request;
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Displays Login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        //dd("testing");
        return view('auth.login');
        //
    }

    /**
     * Accepts user inputs.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginCheck(StoreUserRequest $request)
    {
        $credentials['email'] = $request->input('username');
        $credentials['password'] = $request->input('password');
        $result = Sentinel::authenticate($credentials);
        //return Response::json($result); Need to convert as an API call, will do later
        if(!$result){
            return Redirect::back();
        }
    }
}
