<?php

namespace Modules\Car\Entities;

use Illuminate\Database\Eloquent\Model;

class CarBooking extends Model
{
    protected $fillable = [];

    public function booking()
    {
        return $this->belongsTo('Modules\Booking\Entities\Booking','booking_id','id');
    }

    public function car()
    {
        return $this->belongsTo(Cars::class,'car_id','id');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class,'driver_id','id');
    }
    public function company()
    {
        return $this->belongsTo(CarCompany::class,'company_id','id');
    }

    public function sector()
    {
        return $this->belongsTo(CarSector::class,'sector_id','id');
    }

    // public function booking_passengers(){

    //     return $this->hasMany(CarBooking::class,'car_booking_sector_id','id');
    // }


    public function passengers()
    {
        return $this->hasMany(CarBookingPassengers::class,'car_booking_id','id');
    }



    public function booking_sectors()
    {
        return $this->hasMany(CarBookingSector::class,'car_booking_id','id');
    }








}
