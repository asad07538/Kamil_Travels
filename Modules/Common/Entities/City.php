<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [];

    public function country()
    {
        return $this->belongsTo(Country::class,'country_id','id');
    }
    public function locations()
    {
        return $this->hasMany(Location::class,'city_id','id');
    }
}
