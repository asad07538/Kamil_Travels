<?php

namespace App\Http\Controllers;

use App\Group;
use App\Permission;
use App\Group_Permission;
use Session;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('has_per','group-index');
        $groups=Group::all();
        $permissions=Permission::all();
        return view('setting.group.index',compact('groups','permissions'));

    }

    public function store(Request $request)
    {
        $this->authorize('has_per','group-create');
        $request->validate(  [          
            'name' => 'required',
            'description' => 'required',
            'permissions' => 'required'
        ]);
        $group=new Group;
        $group->name=$request->name;
        $group->description=$request->description;
        $group->save();
        foreach ($request->permissions as $per_id) {
            $group_permission=new Group_Permission;
            $group_permission->group_id=$group->id;
            $group_permission->perm_id=$per_id;
            $group_permission->save();
        }
        Session::flash('success','Group Created Successfully');
        return redirect()->route('group.show',['id' => $group->id ]);

    }

    public function show($id)
    {
        $this->authorize('has_per','group-show');
        $group=Group::find($id);
        $permissions=Permission::all();
        return view('setting.group.show',compact('group','permissions'));

    }

    public function update(Request $request, Group $group)
    {
        $this->authorize('has_per','group-edit');
        $request->validate(  [          
            'name' => 'required',
            'description' => 'required',
            'permissions' => 'required'
        ]);
        $permissions=Permission::all();
        $group=Group::find($request->group_id);
        $group->name=$request->name;
        $group->description=$request->description;
        $group->save();
        $group->permissions()->detach();
        $group->save();
        if ($request->permissions) {
            foreach ($request->permissions as $per_id) {
                    $group_permission=new Group_Permission;
                    $group_permission->group_id=$group->id;
                    $group_permission->perm_id=$per_id;
                    $group_permission->save();
            }
        }
        Session::flash('success','Group Updated Successfully');
        return redirect()->route('group.show',['id' => $group->id ]);

    }

    public function destroy($id)
    {
        $this->authorize('has_per','group-delete');
        $group=Group::find($id);
        $group->delete();
        Session::flash('warning','Group Deleted Successfully');
        return redirect()->route('group.index');

    }
}
