<?php

namespace Modules\Flight\Entities;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $guarded = ['id'];

    public function flights()
    {
        return $this->hasMany('Modules\Flight\Entities\Flight','sector_id','id');
    }
    public function departure_airport()
    {
        return $this->belongsTo('Modules\Flight\Entities\Airport','departure_airport_id','id');
    }
    public function arrival_airport()
    {
        return $this->belongsTo('Modules\Flight\Entities\Airport','arrival_airport_id','id');
    }
}
