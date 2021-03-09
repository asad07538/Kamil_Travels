<?php

namespace Modules\Bank\Entities;

use Illuminate\Database\Eloquent\Model;

class BankAccounts extends Model
{
    protected $guarded = ['id'];

    public function account()
    {
        return $this->belongsTo('Modules\Bank\Entities\AccountHead','account_head_id','id');
    }

    public function bank()
    {
        return $this->belongsTo('Modules\Bank\Entities\Bank','bank_id','id');
    }
}
