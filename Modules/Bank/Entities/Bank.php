<?php

namespace Modules\Bank\Entities;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $guarded = ['id'];

    public function bank_accounts()
    {
        return $this->hasMany('Modules\Bank\Entities\BankAccounts','bank_id','id');
    }
}
