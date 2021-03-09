<?php

namespace Modules\Car\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Car\Entities\CarCompany;
use Modules\Car\Entities\CarCompanyPhone;

use Modules\Common\Entities\Country;
use Modules\Account\Entities\AccountHead;
use Modules\Common\Entities\Phone;

use Illuminate\Support\Facades\Auth;
class CarCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $car_companys=CarCompany::all();
        return view('car::car_company.index',compact('car_companys'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $countries=Country::all();
        return view('car::car_company.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $user=Auth::user();

        $account=AccountHead::create(['title'=>$request->company_name,
            'level_id'=>3,
            'parent_id'=>14,
            'added_by'=>$user->id,
        ]);


        $carcompany=new CarCompany;
        $carcompany->name=$request->company_name;
        $carcompany->address=$request->company_address;
        $carcompany->contact_person=0;
        $carcompany->account_head_id=$account->id;
        $carcompany->save();






        foreach ($request->company_contact as $key => $contact) {
            $phone=Phone::firstorcreate(['number'=>$contact]);

            $comp_contact=new CarCompanyPhone;
            $comp_contact->car_company_id=$carcompany->id;
            $comp_contact->phone_id=$phone->id;
            $comp_contact->save();  
        }
        return redirect()->route('car_company_show',$carcompany->id);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $car_company=CarCompany::find($id);
        return view('car::car_company.show',compact('car_company'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $carcompany=CarCompany::find($id);
        return view('car::car_company.edit',compact('carcompany'));
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
        $carcompany=CarCompany::find($id);
        $carcompany->save();
        return redirect()->route('car_company_show',$carcompany->id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        $carcompany=CarCompany::find($id);
        $carcompany->delete();
        return redirect()->route('car_company_index');

    }
}
