<?php

namespace Modules\Ticket\Entities;

use Illuminate\Database\Eloquent\Model;

class PnrPax extends Model
{
    protected $fillable = [];

    public function person()
    {
        return $this->belongsTo('Modules\Common\Entities\Person','person_id','id');
    }
    
    public function pnr()
    {
        return $this->belongsTo(PNR::class,'pnr_id','id');
    }
    public function fare()
    {
        return $this->belongsTo(PnrFare::class,'fare_id','id');
    }
}
