<?php

namespace Modules\Hotel\Entities;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [];
    public function booking_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','booking_account_id','id');
    }
    public function person()
    {
        return $this->belongsTo('Modules\Common\Entities\Person','person_id','id');
    }
    public function location()
    {
        return $this->belongsTo('Modules\Common\Entities\Location','location_id','id');
    }


    public function phones()
    {
        return $this->belongsToMany('Modules\Common\Entities\Phone','hotel_phones','hotel_id','phone_id');
    }



    public function rooms()
    {
        return $this->hasMany(Room::class,'hotel_id','id');
    }




}
