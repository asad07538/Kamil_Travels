<?php

namespace App\Http\Controllers;

use App\User;
use App\Group;
use App\Permission;
use App\User_Group;
use App\User_Permission;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
// use App\Http\Requests\PasswordRequest;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;


class UserController extends Controller
{

    public function export() 
    {
        // dd($request);
        return Excel::download(new UsersExport, 'users.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
        // return (new UsersExport)->download('invoices.pdf', \Maatwebsite\Excel\Excel::MPDF);
        // return (new UsersExport)->download('invoices.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

    public function import(Request $request) 
    {
        // dd($request);
        if($request->hasfile('image')){
            $file=$request->file('image');
            // $extension=$file->getClientOriginalExtension();
            // $filename=$user->id. "." .$extension;
            // $destinatioin=public_path('/images/');
            // $file->move($destinatioin,$filename);
            // $user->image='/images/'.$filename;

            // dd("importing");
            Excel::import(new UsersImport,  $file);
            return redirect()->route('user.index')->with('Success', 'All good!');
        }else{
            return redirect()->route('user.index')->with('Failed', 'All good!');

        }
    }

    public function index()
    {
        //
        $this->authorize('has_per','user-index');
        $users=User::all();
        $groups=Group::all();
        $permissions=Permission::all();
        return view('setting.users.index',compact('users','groups','permissions'));
    }

    public function myprofile()
    {
        //
        $this->authorize('has_per','my-profile');
        $user=Auth::user();
        $groups=Group::all();
        $permissions=Permission::all();
        return view('setting.My_Profile.index',compact('user','groups','permissions'));
    }
    public function profile_edit(Request $request)
    {
        //
        $this->authorize('has_per','update-profile');
        $request->validate(  [          
            'name' => 'required']);

        $user=Auth::user();
        $user->name=$request->name;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=$user->id. "." .$extension;
            $destinatioin=public_path('/images/');
            $file->move($destinatioin,$filename);
            $user->image='/images/'.$filename;
        }
        $user->save();

        Session::flash('success','Profile Updated Successfully');
        return redirect()->route('profile.my')->withStatus(__('Profile successfully updated.'));;
    }
    public function profile_password_update(Request $request)
    {
        // 
        $this->authorize('has_per','profile-password-change');

        $request->validate(  [          
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8']);
        // 
        $request->user()->fill([
            'password' => Hash::make($request->password)
        ])->save();
        // 
        return redirect()->route('profile.my')->withStatus(__('Password successfully updated.'));
        // 
    }
    //================================================================================//

    public function store(Request $request)
    {
        //
        $this->authorize('has_per','user-create');
        $request->validate(  [          
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'image' => 'required']);

        $user=User::create(['name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make('123456789'),
                ]);
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=$user->id. "." .$extension;
            $destinatioin=public_path('/images/');
            $file->move($destinatioin,$filename);
            $user->image='/images/'.$filename;
        }else{
            $user->image='';
        }
        $user->save();

        if (isset($request->groups)) {
            foreach ($request->groups as $grp_id) {
                $user_group=new User_Group;
                $user_group->user_id=$user->id;
                $user_group->group_id=$grp_id;
                $user_group->save();
            }
        }
        if (isset($request->permissions)) {
            foreach ($request->permissions as $per_id) {
                $user_permission=new UserPermission;
                $user_permission->user_id=$user->id;
                $user_permission->permission_id=$per_id;
                $user_permission->save();
            }
        }
        Session::flash('success','User Created Successfully');
        return redirect()->route('user.show',['id' => $user->id ]);
    }

    public function show($id)
    {
        //
        $this->authorize('has_per','user-show');
        $user=User::find($id);
        $groups=Group::all();
        $permissions=Permission::all();
        return view('setting.users.show',compact('user','groups','permissions'));
    }

    public function update(Request $request)
    {
        //
        $this->authorize('has_per','user-edit');
        $request->validate(  [          
            'name' => 'required',
            'email' => 'required',
            'image' => 'required']);
        $user=User::find($request->user_id);
        $user->name=$request->name;
        $user->email=$request->email;
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=$user->id. "." .$extension;
            $destinatioin=public_path('/images/');
            $file->move($destinatioin,$filename);
            $user->image='/images/'.$filename;
        }
        $user->save();
        $user->permissions()->detach();
        $user->groups()->detach();

        if (isset($request->groups)) {
            foreach ($request->groups as $grp_id) {
                $user_group=new User_Group;
                $user_group->user_id=$user->id;
                $user_group->group_id=$grp_id;
                $user_group->save();
            }
        }
        if (isset($request->permissions)) {
            foreach ($request->permissions as $per_id) {
                $user_permission=new User_Permission;
                $user_permission->user_id=$user->id;
                $user_permission->permission_id=$per_id;
                $user_permission->save();
            }
        }
        $user->save();
        Session::flash('success','User Updated Successfully');
        return redirect()->route('user.show',['id' => $user->id ]);

    }
    public function destroy($id)
    {
        //
        $this->authorize('has_per','user-delete');  
        $user=User::find($id);
        $user->delete();
        Session::flash('success','User Deleted Successfully');
        return redirect()->route('user.index');
    }
}
