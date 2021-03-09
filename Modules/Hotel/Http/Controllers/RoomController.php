<?php

namespace Modules\Hotel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


use Modules\Hotel\Entities\Hotel;
use Modules\Hotel\Entities\Room;
use Modules\Hotel\Entities\RoomType;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $rooms=Room::all();
        return view('hotel::rooms.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $hotels=Hotel::all();
        $roomtypes=RoomType::all();
        return view('hotel::rooms.create',compact('roomtypes','hotels'));
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

        $room=new Room;
        $room->hotel_id=$request->hotel;
        $room->room_type_id=$request->room_type;
        $room->room_no=$request->room_number;
        $room->description=$request->description;
        $room->no_of_beds=$request->no_of_beds;
        $room->save();

        return redirect()->route('room_show',$room);

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $room=Room::find($id);
        return view('hotel::rooms.show',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $room=Room::find($id);
        return view('hotel::rooms.edit',compact('room'));
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
        $room=Room::find($request->id);


        return redirect()->route('room_show',$room);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        $room=Room::find($request->id);
        $room->delete();


        return redirect()->route('room_index');
    }
}
