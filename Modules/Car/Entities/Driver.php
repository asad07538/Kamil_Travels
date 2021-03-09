<?php

namespace Modules\Car\Entities;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [];

    public function car_bookings()
    {
        return $this->hasMany(CarBooking::class,'driver_id','id');
    }
    public function person()
    {
        return $this->belongsTo('Modules\Common\Entities\Person','person_id','id');
    }
    public function company()
    {
        return $this->belongsTo('Modules\Car\Entities\CarCompany','company_id','id');
    }
}
