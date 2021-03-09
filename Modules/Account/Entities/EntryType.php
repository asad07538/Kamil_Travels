<?php

namespace Modules\Account\Entities;

use Illuminate\Database\Eloquent\Model;

class EntryType extends Model
{
    protected $guarded = ['id'];


    public function entry()
    {
        return $this->hasMany('Modules/Account/entities/Entry','entry_type_id','id');
    }
}
