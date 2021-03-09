<?php

namespace App\Http\Controllers;

use App\Permission;
use Session;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->authorize('has_per','permission-index');
        $permissions= Permission::all();
        return view('setting.permision.index',compact('permissions'));
    }
}
