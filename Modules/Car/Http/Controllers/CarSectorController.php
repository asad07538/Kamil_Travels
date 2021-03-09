<?php

namespace Modules\Car\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Car\Entities\CarSector;
use Modules\Common\Entities\Location;

class CarSectorController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // dd("sjdfkl");
        $car_sectors=CarSector::all();
        return view('car::sector.index',compact('car_sectors'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        
        $locations=Location::all();
        return view('car::sector.create',compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $car_sector=new CarSector;
        $car_sector->name=$request->name;
        $car_sector->location_form_id=$request->location_from;
        $car_sector->location_to_id=$request->location_to;
        $car_sector->save();

        return redirect()->route('car_sector_index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $car_sector=CarSector::find($id);
        return view('car::sector.show',compact('car_sector'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $locations=Location::all();
        $car_sector=CarSector::find($id);
        return view('car::sector.edit',compact('car_sector','locations'));
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
        $car_sector=CarSector::find($id);

        $car_sector->save();

        return redirect()->route('car_sector_index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //        
        $car_sector=CarSector::find($id);

        $car_sector->delete();
        return redirect()->route('car_sector_index');
    }
}
