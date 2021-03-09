<?php

namespace Modules\Flight\Entities;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $guarded = ['id'];


    public function country()
    {
        return $this->belongsTo('Modules\Common\Entities\Country','country_id','id');
    } 

    public function departures()
    {
        return $this->hasMany('Modules\Reservation\Entities\reservation_sector','airport_from_id','id');
    }
    public function arrivals()
    {
        return $this->hasMany('Modules\Reservation\Entities\reservation_sector','airport_to_id','id');
    }




    public function departure_sectors()
    {
        return $this->hasMany('Modules\Flight\Entities\Sector','departure_airport_id','id');
    }
    public function arrival_sectors()
    {
        return $this->hasMany('Modules\Flight\Entities\Sector','arrival_airport_id','id');
    }




}
