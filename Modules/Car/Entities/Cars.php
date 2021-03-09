<?php

namespace Modules\Car\Entities;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $fillable = [];

    public function car_bookings()
    {
        return $this->hasMany(CarBooking::class,'car_id','id');
    }


    public function company()
    {
        return $this->belongsTo(CarCompany::class,'company_id','id');
    }

    public function type()
    {
        return $this->belongsTo(CarType::class,'car_type_id','id');
    }

}
