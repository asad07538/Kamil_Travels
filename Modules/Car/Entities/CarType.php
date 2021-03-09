<?php

namespace Modules\Car\Entities;

use Illuminate\Database\Eloquent\Model;

class CarType extends Model
{
    protected $fillable = [];
    public function cars()
    {
        return $this->hasMany(Cars::class,'car_type_id','id');
    }
}
