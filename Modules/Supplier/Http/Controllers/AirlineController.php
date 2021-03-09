<?php

namespace Modules\Supplier\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Supplier\Entities\Airline;
use Modules\Account\Entities\AccountHead;

use Illuminate\Support\Facades\Auth;
class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $airlines=Airline::all();

        return view('supplier::airline.index',compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('supplier::airline.create');
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
        $airline=new Airline;
        $airline->name=$request->name;
        $airline->code=$request->code;
        $airline->comm_system=$request->commission_system;
        $airline->comm_international_per=$request->commission_international;
        $airline->comm_domestic_per=$request->commission_domestic;
        $airline->service_system=$request->service_charge_system;
        $airline->service_international_per=$request->service_charge_international;
        $airline->service_domestic_per=$request->service_charge_domestic;
        // $airline->save();

        $user=Auth::user();
        $agreement_account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>22,
            'added_by'=>$user->id,
        ]);
        $airline->agreement_account_id=$agreement_account->id;
        $ticketing_account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>17,
            'added_by'=>$user->id,
        ]);
        $airline->ticketing_account=$ticketing_account->id;


        $commisison_account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>18,
            'added_by'=>$user->id,
        ]);
        $airline->commisison_account= $commisison_account->id;
        $refund_account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>20,
            'added_by'=>$user->id,
        ]);
        $airline->refund_account=$refund_account->id;
        $service_charge_account_id=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>19,
            'added_by'=>$user->id,
        ]);
        $airline->service_charge_account_id=$service_charge_account_id->id;
        $wht_account=AccountHead::create(['title'=>$request->name,
            'level_id'=>3,
            'parent_id'=>21,
            'added_by'=>$user->id,
        ]);
        $airline->wht_account=$wht_account->id;
         $airline->contact_person_id=0;
         $airline->save();
         return redirect()->route('airline_show',$airline->id);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $airline=Airline::find($id);
        return view('supplier::airline.show',compact('airline'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('supplier::airline.edit');
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
