<?php

namespace Modules\Booking\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Booking\Entities\Booking;
use Modules\Booking\Entities\BookingTickets;
use Modules\Ticket\Entities\PNR;
use Modules\Ticket\Entities\PnrFlight;
use Modules\Ticket\Entities\PnrPax;
use Modules\Ticket\Entities\PnrFare;

use Modules\Flight\Entities\Airport;
use Modules\Flight\Entities\Flight;
use Modules\Flight\Entities\Sector;
use Modules\Flight\Entities\ScheduleFlight;


use Modules\Supplier\Entities\Airline;


use Modules\Account\Entities\AccountHead;

use Modules\Common\Entities\Country;
use Modules\Common\Entities\Person;
use Modules\Common\Entities\Email;
use Modules\Common\Entities\Phone;
use Modules\Common\Entities\PersonPhone;
use Modules\Common\Entities\PersonEmail;


class BookingPnrController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('booking::index');
    }

    public function createpnr($id)
    {
        $booking=Booking::findorfail($id);
        $pnr=new PNR;
        $pnr->status="draft";
        $pnr->save();

        $adultfare=new PnrFare;
        $adultfare->save();

        $childfare=new PnrFare;
        $childfare->save();

        $infantfare=new PnrFare;
        $infantfare->save();

        $pnr->adult_fare_id=$adultfare->id;
        $pnr->child_fare_id=$childfare->id;
        $pnr->infant_fare_id=$infantfare->id;
        $pnr->save();

        $bookingpnr=new BookingTickets;
        $bookingpnr->booking_id=$booking->id;
        $bookingpnr->pnr_id=$pnr->id;
        $bookingpnr->save();

        return redirect()->route('booking_create_pnr_iternary',["id"=>$booking->id,"pnr_id"=>$pnr->id]);
    }

    public function show($id,$pnr_id)
    {
        $booking=Booking::findorfail($id);
        $pnr=PNR::findorfail($pnr_id);        
        return view('booking::booking.ticket.show',compact('booking','pnr'));
    }

// iternary Detail
    public function createpnriternary($id,$pnr_id)
    {
        $booking=Booking::findorfail($id);
        $pnr=PNR::findorfail($pnr_id);
        $airlines=AccountHead::where('level_id',3)->where('parent_id',5)->get();
        return view('booking::booking.ticket.pnr.pnr_detail',compact('booking','pnr','airlines'));
    }
    public function storepnriternary(Request $request)
    {
// dd($request);    
        $booking=Booking::findorfail($request->booking);
        $pnr=PNR::findorfail($request->pnr);
        $pnr->name=$request->pnr_name;
        $pnr->issue_date=$request->date;
        $pnr->adult=$request->adults;
        $pnr->child=$request->childs;
        $pnr->infant=$request->infants;
        $pnr->airline_id=$request->airline;
        $pnr->save();    
        if($request->submit == "next"){
            return redirect()->route('booking_create_pnr_flight',["id"=>$booking->id,"pnr_id"=>$pnr->id]);
        }else{
            return redirect()->route('booking_pnr_show',["id"=>$booking->id,"pnr_id"=>$pnr->id]);
        }
    }

// flight Detail
    public function createpnrflight($id,$pnr_id)
    {
        $booking=Booking::findorfail($id);
        $pnr=PNR::findorfail($pnr_id);
        $airports=Airport::all();
        return view('booking::booking.ticket.pnr.flight',compact('booking','pnr','airports'));
    }

    public function storepnrflight(Request $request)
    {
        // dd($request);
        $booking=Booking::findorfail($request->booking);
        $pnr=PNR::findorfail($request->pnr);
        foreach ($request->from as $key => $from) {


            $airline=AccountHead::find($pnr->airline_id);

            $airport_from=Airport::find($request->from[$key]);
            $airport_to=Airport::find($request->to[$key]);

            $sector= Sector::firstOrCreate([
                'name'=>''.$airport_from->code.'-'.$airport_to->code.'',
                'departure_airport_id' =>$request->from[$key],
                'arrival_airport_id' => $request->to[$key],
            ]);
            $flight=Flight::firstOrCreate([
                'name' => $request->flight[$key],
                'airline_id' => $airline->id,
                'sector_id' => $sector->id,
            ]);
            $scheduleflight=ScheduleFlight::firstOrCreate([
                'flight_id' => $flight->id,
                'departure_date' => $request->d_date[$key],
                'departure_time' => $request->d_time[$key],
                'arrival_time' => $request->a_time[$key]
            ]);
            // dd($airline);

            $pnr_flight=new PnrFlight;
            $pnr_flight->pnr_id=$pnr->id;
            $pnr_flight->schedule_flight=$scheduleflight->id;
            $pnr_flight->class=$request->cabin[$key];
            $pnr_flight->bag=$request->bag[$key];
            $pnr_flight->save();
        }
        // dd($request);
        if($request->submit == "next"){
            return redirect()->route('booking_create_pnr_fare',["id"=>$booking->id,"pnr_id"=>$pnr->id]);
        }else{
            return redirect()->route('booking_pnr_show',["id"=>$booking->id,"pnr_id"=>$pnr->id]);
        }
        
    }
// fare Detail
    public function createpnrfare($id,$pnr_id)
    {
        $booking=Booking::findorfail($id);
        $pnr=PNR::findorfail($pnr_id);

        $booking->total_amount=$booking->total_amount-$pnr->adult_fare->total; 
        $booking->save();
        $booking->total_amount=$booking->total_amount-$pnr->child_fare->total; 
        $booking->save();
        $booking->total_amount=$booking->total_amount-$pnr->infant_fare->total; 
        $booking->save();
        return view('booking::booking.ticket.pnr.fare',compact('booking','pnr'));
    }
    public function storepnrfare(Request $request)
    {
        $booking=Booking::findorfail($request->booking);
        $pnr=PNR::findorfail($request->pnr);

        foreach ($request->pax_type as $key => $fare_id) {
            $pnrfare=PnrFare::find($fare_id);
            $pnrfare->basic_fare=$request->basic_fare[$key];
            $pnrfare->total_tax=$request->total_tax[$key];
            $pnrfare->subtotal=$request->subtotal[$key];
            $pnrfare->airline_comm=$request->airline_comm[$key];
            $pnrfare->airline_service_charge=$request->airline_service_charge[$key];
            $pnrfare->total_payable=$request->total_payable[$key];
            $pnrfare->extra_service_charge=$request->extra_service_charge[$key];
            $pnrfare->total_receivable=$request->total_receivable[$key];
            $pnrfare->save();
            // booking fare calculation
            $booking->total_amount=$booking->total_amount+$pnrfare->total; 
            $booking->save();
        }
        if($request->submit == "next"){
            return redirect()->route('booking_create_pnr_pax',["id"=>$booking->id,"pnr_id"=>$pnr->id]);
        }else{
            return redirect()->route('booking_pnr_show',["id"=>$booking->id,"pnr_id"=>$pnr->id]);
        }
    }
// pax Detail
    public function createpnrpax($id,$pnr_id)
    {
        $booking=Booking::findorfail($id);
        $pnr=PNR::findorfail($pnr_id);
        $countries=Country::all();

        return view('booking::booking.ticket.pnr.pax_detail',compact('booking','pnr','countries'));
    }
    public function storepnrpax(Request $request)
    {
        // dd($request);
        $booking=Booking::findorfail($request->booking);
        $pnr=PNR::findorfail($request->pnr);
        // dd($request);
        if($request->adult_gender){
        foreach ($request->adult_gender as $key => $gender) {
            $person=new Person;
            $person->gender=$request->adult_gender[$key];
            $person->name=$request->adult_name[$key];
            $person->surname=$request->adult_surname[$key];
            $person->date_of_birth=$request->adult_dob[$key];
            $person->country_id=$request->adult_country[$key];
            $person->cnic=$request->adult_cnic[$key];
            $person->save();
            
                // =====================================================
                $ema=New Email;
                $ema->email=$request->adult_email[$key];
                $ema->save();

                $email=New PersonEmail;
                $email->person_id=$person->id;
                $email->email_id=$ema->id;
                $email->save();
                // =====================================================
                $pho=New Phone;
                $pho->number=$request->adult_pohne[$key];
                $pho->save();
                $phone=New PersonPhone;
                $phone->person_id=$person->id;
                $phone->phone_id=$pho->id;
                $phone->save();
                // =====================================================
            $pax=new PnrPax;
            $pax->person_id=$person->id;
            $pax->pnr_id=$request->pnr;
            $pax->fare_id=$pnr->adult_fare->id;
            $pax->pax_type='adult';
            $pax->member_id=$request->adult_member_id[$key];
            $pax->save();
        }
        }
        // dd($request);
        if($request->child_title){
        foreach ($request->child_title as $key => $title) {
            $person=new Person;
            $person->title=$request->child_title[$key];
            $person->name=$request->child_name[$key];
            $person->surname=$request->child_surname[$key];
            $person->date_of_birth=$request->child_dob[$key];
            $person->country_id=$request->child_country[$key];
            $person->cnic=$request->child_cnic[$key];
            $person->save();
                // =====================================================
                $ema=New Email;
                $ema->email=$request->child_email[$key];
                $ema->save();
                $email=New PersonEmail;
                $email->person_id=$person->id;
                $email->email_id=$ema->id;
                $email->save();
                // =====================================================
                $pho=New Phone;
                $pho->number=$request->child_pohne[$key];
                $pho->save();
                $phone=New PersonPhone;
                $phone->person_id=$person->id;
                $phone->phone_id=$pho->id;
                $phone->save();
                // =====================================================
            $pax=new PnrPax;
            $pax->person_id=$person->id;
            $pax->pnr_id=$request->pnr;
            $pax->fare_id=$pnr->child_fare->id;
            $pax->pax_type='child';
            $pax->member_id=$request->child_member_id[$key];
            $pax->save();
        }
        }
        // dd($request);
        if($request->infant_current_adult){
        foreach ($request->infant_current_adult as $key => $current_adult) {
                $person=new Person;
                $person->name=$request->infant_name[$key];
                $person->surname=$request->infant_surname[$key];
                $person->date_of_birth=$request->infant_dob[$key];
                $person->country_id=$request->infant_country[$key];
                $person->cnic=$request->infant_cnic[$key];
                $person->save();
                    // =====================================================
                    $pho=New Phone;
                    $pho->number=$request->infant_pohne[$key];
                    $pho->save();
                    $phone=New PersonPhone;
                    $phone->person_id=$person->id;
                    $phone->phone_id=$pho->id;
                    $phone->save();
                    // =====================================================
                $pax=new PnrPax;
                $pax->person_id=$person->id;
                $pax->pnr_id=$request->pnr;
                $pax->fare_id=$pnr->infant_fare->id;
                $pax->pax_type='infant';
                $pax->save();
            }
        }
        // dd($request);
        if($request->submit == "next"){
            return redirect()->route('booking_create_payment',["id"=>$booking->id,"pnr_id"=>$pnr->id]);
        }else{
            return redirect()->route('booking_pnr_show',["id"=>$booking->id,"pnr_id"=>$pnr->id]);
        }
    }
// payment Detail
    public function enter_ticket_number($id,$pnr_id)
    {
        $booking=Booking::findorfail($id);
        $pnr=PNR::findorfail($pnr_id);

        return view('booking::booking.ticket.pnr.add_ticket',compact('booking','pnr'));
    }
    public function store_ticket_number(Request $request)
    {
        // dd($request);
        foreach ($request->pax_id as $key => $pax) {
            $pax=PnrPax::find($pax);
            $pax->ticket_no=$request->ticket_no[$key];
            $pax->save();
        }
        $booking=Booking::findorfail($request->booking);
        $pnr=PNR::findorfail($request->pnr);

        return redirect()->route('booking_pnr_show',["id"=>$booking->id,"pnr_id"=>$pnr->id]);
        // return view('booking::booking.ticket.show',compact('booking','pnr'));
    }
// payment Detail
    public function createpayment($id,$pnr_id)
    {
        $booking=Booking::findorfail($id);
        $pnr=PNR::findorfail($pnr_id);
        return view('booking::booking.ticket.show',compact('booking','pnr'));
    }
    public function storepayment(Request $request)
    {
        $booking=Booking::findorfail($request->booking);
        $pnr=PNR::findorfail($request->pnr);

        return redirect()->route('booking_pnr_show',["id"=>$booking->id,"pnr_id"=>$pnr->id]);
    }



}
