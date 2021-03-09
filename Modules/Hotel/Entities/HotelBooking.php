<?php

namespace Modules\Hotel\Entities;

use Illuminate\Database\Eloquent\Model;

class HotelBooking extends Model
{
    protected $fillable = [];

    public function booking()
    {
        return $this->belongsTo('Modules\Booking\Entities\Booking','booking_id','id');
    }

    public function booking_rooms()
    {
        return $this->hasMany(HotelBookingRooms::class,'hotel_booking_id','id');
    }
    public function booking_guests()
    {
        return $this->hasMany(HotelBookingGuest::class,'hotel_booking_id','id');
    }



}
