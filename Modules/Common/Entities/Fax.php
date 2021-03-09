<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Fax extends Model
{
    protected $guarded = ['id'];
    public function persons()
    {
        return $this->belongsToMany('Modules\Common\Entities\Person','person_faxes','fax_id','person_id');
    }
}
