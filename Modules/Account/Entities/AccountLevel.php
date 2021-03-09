<?php

namespace Modules\Account\Entities;

use Illuminate\Database\Eloquent\Model;

class AccountLevel extends Model
{
    protected $fillable = [];

    public function account_heads()
    {
        return $this->belongsTo('Modules/Account/entities/AccountHead','level_id','id');
    }

}
