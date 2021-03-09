<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = ['id'];   
    public function nationals()
    {
        return $this->hasMany('Modules\Common\Entities\Person','country_id','id');
    }

    public function airports()
    {
        return $this->hasMany('Modules\Flight\Entities\Airport','country_id','id');
    }

    public function cities()
    {
        return $this->hasMany(City::class,'country_id','id');
    }
}
