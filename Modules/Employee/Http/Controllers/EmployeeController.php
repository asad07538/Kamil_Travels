<?php

namespace Modules\Employee\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Employee\Entities\Employee;

use Modules\Common\Entities\Address;
use Modules\Common\Entities\Country;
use Modules\Common\Entities\Email;
use Modules\Common\Entities\Fax;
use Modules\Common\Entities\Passport;
use Modules\Common\Entities\Person;
use Modules\Common\Entities\Phone;
use Modules\Account\Entities\AccountHead;

use Modules\Common\Entities\PersonAddress;
use Modules\Common\Entities\PersonEmail;
use Modules\Common\Entities\PersonFax;
use Modules\Common\Entities\PersonPhone;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\User_Group;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $employees=Employee::all();
        return view('employee::employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $countries=Country::all();
        return view('employee::employee.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
  //
        // dd($request);
        $request->validate(  [          
            'name' => 'required',
            'email' => 'required',
            // 'image' => 'required'
        ]);
        $person=new Person;
        $person->name=$request->name;
        $person->surname=$request->sur_name;
        $person->date_of_birth=$request->date_of_birth;
        $person->title=$request->title;
        $person->cnic=$request->cnic;
        $person->gender=$request->gender;
        $person->country_id=$request->country;
        $person->save();



        $emp_user=new User;
        $emp_user->name=$request->name;
        $emp_user->cnic=$request->cnic;
        $emp_user->email=$request->email[0];
        $emp_user->type="employee";
        $emp_user->password=Hash::make('123456789');
        $emp_user->save();
        if($request->hasfile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=$emp_user->id. "." .$extension;
            $destinatioin=public_path('/images/');
            $file->move($destinatioin,$filename);
            $emp_user->image='/images/'.$filename;
        }
        $emp_user->save();


        if ($request->emp_type==1) {
            $user_group=new User_Group;
            $user_group->user_id=$emp_user->id;
            $user_group->group_id=7;
            $user_group->save();     
        }
        if ($request->emp_type==2) {
            $user_group=new User_Group;
            $user_group->user_id=$emp_user->id;
            $user_group->group_id=8;
            $user_group->save();     
        }
        if ($request->emp_type==3) {
            $user_group=new User_Group;
            $user_group->user_id=$emp_user->id;
            $user_group->group_id=10;
            $user_group->save();     
            }


        $user=Auth::user();
        $ticketing_account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>9,
            'added_by'=>$user->id,
        ]);
        $salary_account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>10,
            'added_by'=>$user->id,
        ]);
        $loan_account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>11,
            'added_by'=>$user->id,
        ]);
        $mistake_account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>12,
            'added_by'=>$user->id,
        ]);
        $expance_account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>13,
            'added_by'=>$user->id,
        ]);

        $employee= New Employee;
        $employee->person_id=$person->id;
        $employee->user_id=$emp_user->id;
        $employee->ticketing_account_id=$ticketing_account->id;
        $employee->salary_account_id=$salary_account->id;
        $employee->loan_account_id=$loan_account->id;
        $employee->mistake_account_id=$mistake_account->id;
        $employee->allowed_expance_account_id=$expance_account->id;
        $employee->save();

        foreach ($request->address as $key => $add) {
            $address=New Address;
            $address->address=$add;
            $address->save();

            $persn_address=New PersonAddress;
            $persn_address->person_id=$person->id;
            $persn_address->address_id=$address->id;
            $persn_address->save();
        }
        foreach ($request->email as $key => $email) {
            $ema=New Email;
            $ema->email=$add;
            $ema->save();

            $email=New PersonEmail;
            $email->person_id=$person->id;
            $email->email_id=$ema->id;
            $email->save();
        }
        foreach ($request->fax as $key => $fax) {
            $faxx=New Fax;
            $faxx->fax=$fax;
            $faxx->save();

            $fax=New PersonFax;
            $fax->person_id=$person->id;
            $fax->fax_id=$faxx->id;
            $fax->save();
        }
        foreach ($request->phone as $key => $phone) {
            $pho=New Phone;
            $pho->number=$phone;
            $pho->save();


            $phone=New PersonPhone;
            $phone->person_id=$person->id;
            $phone->phone_id=$pho->id;
            $phone->save();
        }

        return redirect()->route('employee_show',$employee->id);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $employee=Employee::find($id);
        return view('employee::employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('employee::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
