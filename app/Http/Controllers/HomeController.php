<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Modules\Employee\Entities\Employee;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $this->middleware('auth');
        
        if(Auth::check()){
            if(Auth::user()->type=="customer"){
                return view('customer.index');
            }else{
                return view('admin.index');
            }
        }else{

            $employees=Employee::all();
            return view('guest.index',compact('employees'));
        }



    }
}
