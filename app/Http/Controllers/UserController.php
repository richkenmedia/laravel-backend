<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserSignupRequest;
//use App\Http\Controllers\Controller;
use App\Models\User;
use Sentinel;
use DB;
use Session;
use PDOException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $user = User::all();
        return view('users.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\CreateUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        try{
            $credentials = array(
                'username'     => $request->username,
                'first_name'   => $request->firstname,
                'last_name'    => $request->lastname,
                'email'        => $request->email,
                'password'     => $request->password,
            );
            if(Sentinel::registerAndActivate($credentials)){
                Session::flash('success','Created Successfully!!');
                return redirect('admin/user');

            }else{
                return redirect('user/signup');
            }

        }catch (\PDOException $e){
            echo "Found Issue";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = Sentinel::findById($id);

        $credentials = [
            'first_name'    => $request->firstname,
            'last_name'     => $request->lastname,
            'email'         => $request->email,
            'username'      => $request->username,
        ];

        if($request->has("password")){
            $credentials['password'] = $request->password;
        }

        $user = Sentinel::update($user, $credentials);
        Session::flash('success','Updated Successfully!!');
        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Session::flash('success','Deleted Successfully!!');
        return redirect('admin/user');
    }  

    public function deleteAll(Request $request)
    {
        $all_params = $request->all();
        foreach($all_params['ids'] as $id):
            $user = User::find($id);
            $user->delete();
        endforeach;
        Session::flash('success','Deleted Successfully!!');
        return 'true';
    }

    public function login(){
        if(Sentinel::check()){
            return redirect("/");
        }
        return view('users.login');
    }

    public function loginCheck(UserLoginRequest $request){
        $credentials = array();
        $credentials['login'] = $request->login;
        $credentials['password'] = $request->password;
        if($request->remember){
            $remember = $request->remember;
        }
        else{
            $remember = false;
        }
        if( Sentinel::authenticate($credentials, $remember) ){
            return redirect('admin');
        }else{
            return back()->withInput($request->only('login'))->withErrors(['errors' =>"Please check your credentials"]);
        }
    }

    public function logout(){
        Sentinel::logout(null, true);
        return redirect("/");
    }

    public function signup(UserSignupRequest $request){
        $credentials = array(                           
                          'username'     => $request->username,
                          'email'        => $request->email,
                          'first_name'   => $request->first_name,
                          'last_name'    => $request->last_name,
                          'password'     => $request->password,
                        );
        if(Sentinel::registerAndActivate($credentials)){
            Session::flash('success', 'Your account has been created successfully. Please Login');
            return redirect('user/login');
        }else{
            return redirect('user/signup');
        }
    }
}