<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $guarded = ['id'];
    public function persons()
    {
        return $this->belongsToMany('Modules\Common\Entities\Person','person_addresses','address_id','person_id');
    }
}
