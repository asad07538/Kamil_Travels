<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [];

    public function car_sector_froms()
    {
        return $this->hasMany('Modules/Car/Entities/CarSector','location_form_id','id');
    }
    public function car_sector_tos()
    {
        return $this->hasMany('Modules/Car/Entities/CarSector','location_form_id','id');
    }

    public function city()
    {
        return $this->belongsTo(City::class,'city_id','id');
    }

    public function hotels()
    {
        return $this->hasMany('Modules\Hotel\Entities\Hotel','location_id','id');
    }

}
