<?php

namespace Modules\Booking\Entities;

use Illuminate\Database\Eloquent\Model;

class BookingTour extends Model
{
    protected $fillable = [];

    public function booking()
    {
        return $this->belongsTo('Modules\Booking\Entities\Booking','booking_id','id');
    }
}
