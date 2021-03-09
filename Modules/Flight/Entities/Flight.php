<?php

namespace Modules\Flight\Entities;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $guarded = ['id'];

    public function flights()
    {
        return $this->hasMany('Modules/Ticket/Entities/PnrFlight','flight_id','id');
    }
    public function flight_schedules()
    {
        return $this->hasMany('Modules\Flight\Entities\ScheduleFlight','flight_id','id');
    }
    public function airline()
    {
        return $this->belongsTo('Modules\Supplier\Entities\Airline','airline_id','id');
    }
    public function sector()
    {
        return $this->belongsTo('Modules\Flight\Entities\Sector','sector_id','id');
    }
}
