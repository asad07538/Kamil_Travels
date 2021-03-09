<?php

namespace Modules\Hotel\Entities;

use Illuminate\Database\Eloquent\Model;

class HotelBookingRooms extends Model
{
    protected $fillable = [];
    public function hotel_booking()
    {
        return $this->belongsTo(HotelBooking::class,'hotel_booking_id','id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class,'room_id','id');
    }

}

