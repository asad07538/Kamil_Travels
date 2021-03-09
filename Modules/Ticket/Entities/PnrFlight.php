<?php

namespace Modules\Ticket\Entities;

use Illuminate\Database\Eloquent\Model;

class PnrFlight extends Model
{
    protected $fillable = [];


    public function pnr()
    {
        return $this->belongsTo(PnrFlight::class,'pnr_id','id');
    }
    
    public function schedule_flights()
    {
        return $this->belongsTo('Modules\Flight\Entities\ScheduleFlight','schedule_flight','id');
    }

    


}
