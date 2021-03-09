<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $guarded = ['id'];
    public function persons()
    {
        return $this->belongsToMany('Modules\Common\Entities\Person','person_emails','email_id','person_id');
    }
}
