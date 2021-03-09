<?php

namespace Modules\Car\Entities;

use Illuminate\Database\Eloquent\Model;

class CarBookingPassengers extends Model
{
    protected $fillable = [];

    public function car_booking()
    {
        return $this->belongsTo(CarBooking::class,'car_booking_id','id');
    }
    public function person()
    {
        return $this->belongsTo('Modules\Common\Entities\Person','person_id','id');
    }

    public function booking()
    {
        return $this->belongsTo('Modules\Booking\Entities\Booking','booking_id','id');
    }
}
