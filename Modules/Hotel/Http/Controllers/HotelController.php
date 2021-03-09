<?php

namespace Modules\Hotel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Hotel\Entities\Hotel;
use Modules\Hotel\Entities\HotelPhones;
use Modules\Hotel\Entities\Room;
use Modules\Common\Entities\Location;
use Modules\Common\Entities\Phone;
use Modules\Account\Entities\AccountHead;


use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $hotels=Hotel::all();
        return view('hotel::hotel.index',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $locations=Location::all();
        return view('hotel::hotel.create',compact('locations'));
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
        $account=AccountHead::create(['title'=>$request->hotel_name,
            'level_id'=>3,
            'parent_id'=>5,
            'added_by'=>$user->id,
        ]);


        $hotel=new Hotel;
        $hotel->name=$request->hotel_name;
        $hotel->address=$request->hotel_address;
        $hotel->location_id=$request->hotel_location;
        $hotel->booking_account_id=$account->id;
        $hotel->save();

        foreach ($request->hotel_contact as $key => $phone_number) {
            $phone=new Phone;
            $phone->number=$phone_number;
            $phone->save();

            $hotelphone= new HotelPhones;
            $hotelphone->phone_id=$phone->id;
            $hotelphone->hotel_id=$hotel->id;
            $hotelphone->save();
        }


        
        return redirect()->route('hotel_show',$hotel);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $hotel=Hotel::find($id);
        return view('hotel::hotel.show',compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $hotel=Hotel::find($id);
        return view('hotel::hotel.edit',compact('hotel'));
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
        $hotel=Hotel::find($id);

        $hotel->save();
        return redirect()->route('hotel_show',$hotel);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        $hotel=Hotel::find($id);

        $hotel->delete();

        return redirect()->route('hotel_index');

    }
}
