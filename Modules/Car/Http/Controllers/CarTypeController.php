<?php

namespace Modules\Car\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Car\Entities\CarType;

class CarTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $car_types=CarType::all();
        return view('car::car_type.index',compact('car_types'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        
        return view('car::car_type.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $car_type=new CarType;

        $car_type->name=$request->name;
        $car_type->seats=$request->seats;
        $car_type->save();

        return redirect()->route('car_type_show',$car_type->id);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $car_type=CarType::find($id);
        return view('car::car_type.show',compact('car_type'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $car_type=CarType::find($id);
        return view('car::car_type.edit',compact('car_type'));
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
        $car_type=CarType::find($id);

        $car_type->save();

        return redirect()->route('car_type_show',$car_type->id);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //        
        $car_type=CarType::find($id);

        $car_type->delete();
        return redirect()->route('car_type_index');
    }
}
