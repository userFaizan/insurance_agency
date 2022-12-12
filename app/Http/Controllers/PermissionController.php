<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Permission = Permission::all();
        return view ('admin_panel.module.index', compact('Permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_panel.module.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required|unique:users,name'
        ]);

        Permission::create($request->only('name'));

        return redirect()->route('permissions.index')
        ->with('message', 'Module Created successfully.');
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
        $Permission = Permission::find($id);
        return view('admin_panel.module.edit',compact('Permission'));

    }

     /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Permission  $Permission
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Permission $Permission)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name,'.$Permission->id
        ]);

        $Permission->update($request->only('name'));
        return redirect()->route('permissions.index')
        ->with('message', 'Module Updated successfully.');
    }

 /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Permission  $Permission
    * @return \Illuminate\Http\Response
    */
    public function destroy(Permission $Permission)
    {
        $Permission->delete();
        return redirect()->route('permissions.index')->with('message','Module has been deleted successfully');
    }
}
