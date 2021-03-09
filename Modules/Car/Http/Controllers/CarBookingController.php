<?php

namespace Modules\Car\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Car\Entities\CarBooking;
use Modules\Car\Entities\Cars;
use Modules\Car\Entities\Driver;
use Modules\Car\Entities\CarCompany;
use Modules\Car\Entities\CarSector;
use Modules\Common\Entities\Location;

class CarBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $car_bookings=CarBooking::all();
        return view('car::car_booking.index',compact('car_bookings'));

    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $drivers=Driver::all();
        // $car_companies=CarCompany::all();
        $cars=Cars::all();
        $locations=Location::all();
        return view('car::car_booking.create',compact('drivers','cars','locations'));
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
        $carboking=new CarBooking;
        $carboking->car_id=$request->car;
        $carboking->driver_id=$request->driver;
        $carboking->traveling_date=$request->d_date;
        $carboking->traveling_time=$request->d_time;
        $carboking->arrival_date=$request->a_date;
        $carboking->arrival_time=$request->a_time;
        $location_from=Location::find($request->from);
        $location_to=Location::find($request->to);
        $sector= CarSector::firstOrCreate([
            'name'=>''.$location_from->name.'-'.$location_to->name.'',
            'location_form_id' =>$location_from->id,
            'location_to_id' => $location_to->id,
        ]);
        $carboking->sector_id=$sector->id;
        $carboking->save();
        return redirect()->route('car_booking_show',$carboking->id);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $carboking=CarBooking::find($id);
        return view('car::car_booking.show',compact('carboking'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('car::car_booking.edit');
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
