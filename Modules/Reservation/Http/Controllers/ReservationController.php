<?php

namespace Modules\Reservation\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Flight\Entities\Airport;
use Modules\Reservation\Entities\Reservation;

use Illuminate\Support\Facades\Auth;
class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function flight_selection()
    {
        $airports=Airport::all();
        return view('reservation::reservation/create/step1',compact('airports'));
    }
    public function flight_selection_save()
    {
        // dd("sd");
        return redirect()->route('reservation_show');
    }
    public function fare_insertion()
    {
        return view('reservation::reservation/create/step2');
    }
    public function fare_insertion_store()
    {
        return redirect()->route('reservation_show');
    }
    public function pax_insertion()
    {
        return view('reservation::reservation/create/step3');
    }

    public function pax_insertion_store()
    {
        return redirect()->route('reservation_show');
    }

    public function payment_insertion()
    {
        return view('reservation::reservation/create/step4');
    }

    public function payment_insertion_store()
    {
        return redirect()->route('reservation_show');
    }
    public function reservation_invoice()
    {
        return view('reservation::reservation/create/step5invoice');
    }




    public function index()
    {
        $reservations=Reservation::all();
        return view('reservation::reservation.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $reservation=new Reservation;
        $user=Auth::User();
        $reservation->user_id=$user->id;
        $reservation->save();
        return redirect()->route('reservation_show', $reservation->id);
        // return view('reservation::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    // public function show()
    {
        $reservation=Reservation::find($id);
        return view('reservation::reservation.show',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('reservation::edit');
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
