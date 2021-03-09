<?php

namespace Modules\Reservation\Entities;

use Illuminate\Database\Eloquent\Model;

class reservation_sector extends Model
{
    protected $guarded = ['id'];
    public function reservation()
    {
        return $this->belongsTo(' Modules\Reservation\Entities\Reservation','reservation_id','id');
    }
    public function departure_form()
    {
        return $this->belongsTo('Modules/Flight/Entities/Airport','airport_from_id','id');
    }
    public function arrival_to()
    {
        return $this->belongsTo('Modules/Flight/Entities/Airport','airport_to_id','id');
    }
    public function flight()
    {
        return $this->belongsTo('Modules/Flight/Entities/Flight','flight_id','id');
    }
}
