<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Passport extends Model
{
    protected $guarded = ['id'];  
    public function person()
    {
        return $this->belongsTo('Modules\Common\Entities\Person','person_id','id');
    }
}
