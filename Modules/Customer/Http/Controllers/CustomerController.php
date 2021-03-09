<?php

namespace Modules\Customer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Customer\Entities\Customer;

use App\User;
use App\User_Group;
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

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $customers=Customer::all();
        return view('customer::customer.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $countries=Country::all();
        return view('customer::customer.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $person=new Person;
        $person->name=$request->name;
        $person->surname=$request->sur_name;
        $person->date_of_birth=$request->date_of_birth;
        $person->title=$request->title;
        $person->cnic=$request->cnic;
        $person->gender=$request->gender;
        $person->country_id=$request->country;
        $person->save();

        $user=User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('123456789')
        ]);
        $user_group=new User_Group;
        $user_group->user_id=$user->id;
        $user_group->group_id=6;
        $user_group->save();

        $user=Auth::user();
        $account_head=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>6,
            'added_by'=>$user->id,
        ]);
        $refund=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>7,
            'added_by'=>$user->id,
        ]);
        $agreement_account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>8,
            'added_by'=>$user->id,
        ]);

        $customer= New Customer;
        $customer->person_id=$person->id;
        $customer->account_head_id=$account_head->id;
        $customer->refund_id=$refund->id;
        $customer->agreement_account_id=$agreement_account->id;
        $customer->save();

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

        return redirect()->route('customer_show',$customer->id);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $customer=Customer::find($id);
        return view('customer::customer.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('customer::edit');
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
