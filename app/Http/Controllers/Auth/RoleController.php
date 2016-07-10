<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateRolesRequest;
use App\Http\Requests\UpdateRolesRequest;
use Session;
use App\Role;
use DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::all();
        return view('roles.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRolesRequest $request)
    {
        $role_user = new Role();
        $role_user->name = $request->name;
        $role_user->description = $request->description;
        $role_user->save();
        Session::flash('success', 'Created Successfully!!');
        return redirect('admin/roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRolesRequest $request, $id)
    {
        $role               = Role::find($id);
        $role->name         = $request->name;
        $role->description  = $request->description;
        $role->save();
        Session::flash('success', 'Updated Successfully!!');
        return redirect('admin/roles')->withInput();
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        Session::flash('success', 'Deleted Successfully!!');
        return back();
    }

    public function deleteAll(Request $request)
    {

        $all_params = $request->all();
        foreach ($all_params['ids'] as $id) :
            $role = Role::find($id);
            $role->delete();
        endforeach;
        Session::flash('success', 'Deleted Successfully!!');
        return 'true';
    }
}
