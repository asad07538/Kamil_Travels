<?php

namespace Modules\Reservation\Entities;

use Illuminate\Database\Eloquent\Model;

class reservation_fare extends Model
{
    protected $guarded = ['id'];


    public function adult_fares()
    {
        return $this->belongsTo(Reservation::class,'adult_fare_id','id');
    }
    public function child_fares()
    {
        return $this->belongsTo(Reservation::class,'child_fare_id','id');
    }
    public function infant_fares()
    {
        return $this->belongsTo(Reservation::class,'infant_fare_id','id');
    }
}
