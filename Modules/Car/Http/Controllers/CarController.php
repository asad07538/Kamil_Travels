<?php

namespace Modules\Car\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Car\Entities\Cars;
use Modules\Car\Entities\CarCompany;
use Modules\Car\Entities\CarType;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $cars=Cars::all();
        return view('car::car.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $car_types=CarType::all();
        $companies=CarCompany::all();
        return view('car::car.create',compact('car_types','companies'));
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
        $car=new Cars;
        // dd($car);
        $car->chaces_no=$request->chases_no;
        $car->no_plate=$request->registration_no;
        $car->car_type_id=$request->car_type;
        $car->company_id=$request->car_company;
        $car->save();
        return redirect()->route('car_show',$car->id);

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $car=Cars::find($id);
        return view('car::car.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $car_types=CarType::all();
        $companies=CarCompany::all();
        $car=Cars::find($id);
        return view('car::car.edit',compact('car_types','car','companies'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $car=Cars::find($id);

        $car->save();
        return redirect()->route('car_show',$car->id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        $car=Cars::find($id);

        $car->delete();
        return redirect()->route('car_delete');
    }
}
