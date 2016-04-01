<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use Sentinel;
use Session;
use App\Models\Role;
use DB;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::all();
        return view('groups.index',compact('role')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
        //return "create function";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGroupRequest $request)
    {
        $group_details = array(
                        'name' => $request->name,
                        'slug' => $request->slug
                        );
        $role = Sentinel::getRoleRepository()->createModel()->create($group_details);
        Session::flash('success','Created Successfully!!');
        return redirect('admin/group');
        // $request->session()->flash('status', 'Created successful!');
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
        return view('groups.show', compact('role'));
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
        return view('groups.edit', compact('role','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupRequest $request, $id)
    {
        //******************************************************
        $role = Sentinel::findRoleById($id);
      
        // $credentials = [
        //     'name' => $request->name,
        //     'slug' =>  $request->slug,
        // ];

        // $role = Sentinel::inRoleupdate($role, $credentials);

        //******************************************************
        $role->name =  $request->name;
        $role->slug =  $request->slug;
        $role->save();
        Session::flash('success','Updated Successfully!!');
        return redirect('admin/group');
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
        Session::flash('success','Deleted Successfully!!');
        return back();
    }   
    public function deleteAll(Request $request)
    {

        $all_params = $request->all();
        foreach($all_params['ids'] as $id):
            $role = Role::find($id);
            $role->delete();
        endforeach;
        Session::flash('success','Deleted Successfully!!');
        return 'true';
    }    
}