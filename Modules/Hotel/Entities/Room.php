<?php

namespace Modules\Hotel\Entities;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class,'hotel_id','id');
    }
    public function type()
    {
        return $this->belongsTo(RoomType::class,'room_type_id','id');
    }

    public function hotel_bookings()
    {
        return $this->belongsTo(HotelBookingRooms::class,'room_id','id');
    }

}
