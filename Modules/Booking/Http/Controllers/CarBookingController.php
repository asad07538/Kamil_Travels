<?php

namespace Modules\Booking\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Booking\Entities\Booking;
use  Modules\Car\Entities\CarBooking;
use  Modules\Car\Entities\CarBookingPassengers;

use Modules\Common\Entities\Address;
use Modules\Common\Entities\Email;
use Modules\Common\Entities\Person;
use Modules\Common\Entities\Phone;

use Modules\Common\Entities\PersonAddress;
use Modules\Common\Entities\PersonEmail;
use Modules\Common\Entities\PersonPhone;

class CarBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function listcarbooking($bid)
    {
        $carbookings=CarBooking::where('status',0)->get();
        $booking=Booking::find($bid);

        return view('booking::booking.car.create.select_booking',compact('carbookings','booking'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function selectcarbooking($bid,$cbid)
    {

        $booking=Booking::find($bid);
        $carbooking=CarBooking::find($cbid);


        return view('booking::booking.car.create.detail',compact('booking','carbooking'));
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
        $person=new Person;
        $person->name=$request->name;
        $person->cnic=$request->cnic;
        $person->save();

        $address=New Address;
        $address->address=$request->address;
        $address->save();
        $persn_address=New PersonAddress;
        $persn_address->person_id=$person->id;
        $persn_address->address_id=$address->id;
        $persn_address->save();

        $ema=New Email;
        $ema->email=$request->email;
        $ema->save();
        $email=New PersonEmail;
        $email->person_id=$person->id;
        $email->email_id=$ema->id;
        $email->save();

        $pho=New Phone;
        $pho->number=$request->phone;
        $pho->save();
        $phone=New PersonPhone;
        $phone->person_id=$person->id;
        $phone->phone_id=$pho->id;
        $phone->save();

        $booking=Booking::find($request->bid);
        $carbooking=CarBooking::find($request->cbid);

        $carbookingpax=new CarBookingPassengers;

        $carbookingpax->person_id=$person->id;    
        $carbookingpax->booking_id=$booking->id;    
        $carbookingpax->car_booking_id=$carbooking->id;   
        $carbookingpax->seat_no=0; 

        $carbookingpax->total_fare=$request->total_fare;   
        $carbookingpax->save();

        // booking fare calculation
        $booking->total_amount=$booking->total_amount+$request->total_fare; 
        $booking->save();

        return redirect()->route('booking_show',$booking->id);      
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($bid, $cbid)
    {

        $booking=Booking::find($bid);
        $carbooking=CarBookingPassengers::find($cbid);
        // dd($carbooking);
        return view('booking::booking.car.show',compact('booking','carbooking'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('booking::edit');
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
