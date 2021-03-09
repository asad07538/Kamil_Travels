<?php

namespace Modules\Ticket\Entities;

use Illuminate\Database\Eloquent\Model;

class PnrFare extends Model
{
    protected $fillable = [];


    public function adults()
    {
        return $this->hasOne(PnrFare::class,'adult_fare_id','id');
    }
    public function childs()
    {
        return $this->hasOne(PnrFare::class,'child_fare_id','id');
    }
    public function infants()
    {
        return $this->hasOne(PnrFare::class,'infant_fare_id','id');
    }

}
