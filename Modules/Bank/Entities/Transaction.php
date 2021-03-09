<?php

namespace Modules\Bank\Entities;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = ['id'];

    public function transaction_type()
    {
        return $this->belongsTo('Modules/Bank/entities/TransactionType','transaction_type_id','id');
    }
    public function transaction_from()
    {
        return $this->belongsTo('Modules/Account/entities/AccountHead','from_account_id','id');
    }
    public function transaction_to()
    {
        return $this->belongsTo('Modules/Account/entities/AccountHead','to_account_id','id');
    }
    public function created_by()
    {
        return $this->belongsTo('App\User','made_by_id','id');
    }
}
