<?php

namespace Modules\Flight\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Flight\entities\Airport;
use Modules\Common\entities\Country;
class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $airports=Airport::all();
        // $airports=DB::table('airports')->paginate(2);
        return view('flight::airport.index',compact('airports'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $countries=Country::all();
        return view('flight::airport.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $request->validate(  [          
            'name' => 'required',
            'iata_code' => 'required|unique:airports',
            'country' => 'required',
        ]);

        Airport::create([
            'name'=>$request->name,
            'iata_code'=>$request->iata_code,
            'country_id'=>$request->country]);

        return redirect()->route('airports');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $airport=Airport::find($id);

        return view('flight::airport.show',compact('$airport'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $airport=Airport::find($id);
        $countries=Country::all();

        return view('flight::airport.edit',compact('airport','countries'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        //
        $request->validate(  [          
            'id' => 'required',
            'name' => 'required',
            'iata_code' => 'required',
            'country' => 'required',
        ]);

            $airport=Airport::find($request->id);
            $airport->name=$request->name;
            $airport->iata_code=$request->iata_code;
            $airport->country_id=$request->country;
            $airport->save();

        return redirect()->route('airports');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        $airport=Airport::find($id);
        $airport->delete();
        return redirect()->route('airports');
    }
}
