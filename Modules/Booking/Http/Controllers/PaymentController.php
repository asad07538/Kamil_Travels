<?php

namespace Modules\Booking\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Booking\Entities\Booking;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function cash($bid)
    {
        $booking=Booking::find($bid);

        return view('booking::booking.payment.cash',compact('booking'));
    }
    public function cash_store(Request $request)
    {
        $booking=Booking::find($request->bid);
        $booking->discount=$request->discount;
        $booking->total_receivable=$request->receivable;
        $booking->received_amount=$request->reveived;
        $booking->status="complete";
        $booking->save();
        return redirect()->route('booking_show',$booking->id);
    }


    public function credit($bid)
    {
        $booking=Booking::find($bid);
        
        return view('booking::booking.payment.credit',compact('booking'));
    }
    public function credit_store(Request $request)
    {
        $booking=Booking::find($request->bid);

        $booking->save();
        return redierct()->route('booking_show',$booking->id);
    }
    public function cheque($bid)
    {
        $booking=Booking::find($bid);
        
        return view('booking::booking.payment.check',compact('booking'));
    }
    public function cheque_store(Request $request)
    {
        $booking=Booking::find($request->bid);

        $booking->save();
        return redierct()->route('booking_show',$booking->id);
    }
}
