<?php

namespace Modules\Booking\Entities;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [];


    public function customer()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','customer_id','id');
    }

    public function sale_person()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','created_by','id');
    }


    public function tickets()
    {
        return $this->belongsToMany('Modules\Ticket\Entities\PNR','booking_tickets','booking_id','pnr_id');
    }

    public function car_bookings()
    {
        return $this->hasMany('Modules\Car\Entities\CarBookingPassengers','booking_id','id');
    }
    public function hotel_bookings()
    {
        return $this->hasMany('Modules\Hotel\Entities\HotelBooking','booking_id','id');
    }

    // ======================
    public function group_tickets()
    {
        return $this->belongsToMany('Modules\Bookin\Entities\BookingGroupTicket','booking_id','id');
    }
    public function tours()
    {
        return $this->belongsToMany('Modules\Bookin\Entities\BookingTour','booking_id','id');
    }
    public function visa()
    {
        return $this->belongsToMany('Modules\Bookin\Entities\BookingVisa','booking_id','id');
    }



}
