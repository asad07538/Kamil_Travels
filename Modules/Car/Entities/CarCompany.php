<?php

namespace Modules\Car\Entities;

use Illuminate\Database\Eloquent\Model;

class CarCompany extends Model
{
    protected $fillable = [];

    public function contact_person()
    {
        return $this->belongsTo('Modules\Common\Entities\Person','contact_person','id');
    }


    public function booking_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','account_head_id','id');
    }
    public function phones()
    {
        return $this->belongsToMany('Modules\Common\Entities\Phone','car_company_phones','car_company_id','phone_id');
    }

    

    public function cars()
    {
        return $this->hasMany(Cars::class,'company_id','id');
    }



    public function car_bookings()
    {
        return $this->hasMany(CarBooking::class,'company_id','id');
    }
}
