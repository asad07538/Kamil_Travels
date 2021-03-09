<?php

namespace Modules\Account\Entities;

use Illuminate\Database\Eloquent\Model;

class EntryItem extends Model
{
    protected $guarded = ['id'];

    public function entry()
    {
        return $this->belongsTo('Modules/Account/entities/Entry','entry_id','id');
    }
    public function account()
    {
        return $this->belongsTo('Modules/Account/entities/AccountHead','account_id','id');
    }
}
