<?php

namespace Modules\Flight\Entities;

use Illuminate\Database\Eloquent\Model;

class ScheduleFlight extends Model
{
    protected $guarded = ['id'];

    public function flight()
    {
        return $this->belongsTo('Modules\Flight\Entities\Flight','flight_id','id');
    }    

    public function schedules()
    {
        return $this->belongsTo('Modules\Flight\Entities\Flight','schedule_flight','id');
    }
    

}
