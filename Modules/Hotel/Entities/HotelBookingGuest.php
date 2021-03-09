<?php

namespace Modules\Hotel\Entities;

use Illuminate\Database\Eloquent\Model;

class HotelBookingGuest extends Model
{
    protected $fillable = [];

    public function hotel_booking()
    {
        return $this->belongsTo(HotelBooking::class,'hotel_booking_id','id');
    }

    public function person()
    {
        return $this->belongsTo('Modules\Common\Entities\Person','person_id','id');
    }



}
