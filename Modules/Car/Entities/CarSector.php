<?php

namespace Modules\Car\Entities;

use Illuminate\Database\Eloquent\Model;

class CarSector extends Model
{
    protected $guarded = ['id'];

    public function booking_sectors()
    {
        return $this->hasMany(CarBooking::class,'sector_id','id');
    }
    public function location_from()
    {
        return $this->belongsTo('Modules\Common\Entities\Location','location_form_id','id');
    }
    public function location_to()
    {
        return $this->belongsTo('Modules\Common\Entities\Location','location_to_id','id');
    }


}
