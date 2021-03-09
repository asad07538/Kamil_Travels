<?php

namespace Modules\Car\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Car\Entities\Driver;
use Modules\Car\Entities\CarCompany;
use Modules\Account\Entities\AccountHead;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




use Modules\Common\Entities\Address;
use Modules\Common\Entities\Country;
use Modules\Common\Entities\Email;
use Modules\Common\Entities\Fax;
use Modules\Common\Entities\Passport;
use Modules\Common\Entities\Person;
use Modules\Common\Entities\Phone;

use Modules\Common\Entities\PersonAddress;
use Modules\Common\Entities\PersonEmail;
use Modules\Common\Entities\PersonFax;
use Modules\Common\Entities\PersonPhone;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
     public function index()
    {
        $drivers=Driver::all();
        return view('car::drivers.index',compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $countries=Country::all();
        $companies=CarCompany::all();
        return view('car::drivers.create',compact('countries','companies'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        // person
        $person=new Person;
        $person->name=$request->name;
        $person->surname=$request->sur_name;
        $person->date_of_birth=$request->date_of_birth;
        $person->title=$request->title;
        $person->cnic=$request->cnic;
        $person->gender=$request->gender;
        $person->country_id=$request->country;
        $person->save();


        $user=new User;
        $user->name=$request->name;
        $user->cnic=$request->cnic;
        $user->email=$request->email[0];
        $user->password=Hash::make('123456789');
        $user->save();


        $authuser=Auth::user();
        $account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>5,
            'added_by'=>$authuser->id,
        ]);

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
        // driver
        $driver=new Driver;
        $driver->licence_no=$request->licence_no;
        $driver->user_id=$user->id;
        $driver->account_head_id=$account->id;
        $driver->person_id=$person->id;
        $driver->company_id=$request->company;
        $driver->save();
        return redirect()->route('driver_show',$driver->id);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $driver=Driver::find($id);
        return view('car::drivers.show',compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $drivers=Driver::find($id);
        $countries=Country::all();
        return view('car::drivers.edit',compact('drivers','countries'));
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
        $driver=Driver::find($id);

        $driver->save();

        return redirect()->route('driver_show',$driver->id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //        
        $driver=Driver::find($id);

        $driver->delete();
        return redirect()->route('driver_index');
    }
}
