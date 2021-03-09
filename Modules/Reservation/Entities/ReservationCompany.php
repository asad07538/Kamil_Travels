<?php

namespace Modules\Reservation\Entities;

use Illuminate\Database\Eloquent\Model;

class reservation_company extends Model
{
    protected $guarded = ['id'];
    public function reservation()
    {
        return $this->belongsTo(Reservation::class,'reservation_id','id');
    }
}
