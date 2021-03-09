<?php

namespace Modules\Hotel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


use Modules\Hotel\Entities\RoomType;
use Modules\Hotel\Entities\Hotel;
class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $roomtypes=RoomType::all();
        return view('hotel::room_type.index',compact('roomtypes'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {

        return view('hotel::room_type.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $roomtype=new RoomType;
        $roomtype->name=$request->name;
        $roomtype->description=$request->description;
        $roomtype->save();
        return redirect()->route('room_type_show',$roomtype);

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $roomtype=RoomType::find($id);
        return view('hotel::room_type.show',compact('roomtype'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('hotel::room_type.edit');
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
        $roomtype=RoomType::find($id);

        $roomtype->save();

        return redirect()->route('room_type_show',$room);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        $roomtype=RoomType::find($id);
        $roomtype->delete();
        return redirect()->route('room_type_index',$room);

    }
}
