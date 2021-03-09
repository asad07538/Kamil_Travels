<?php

namespace Modules\Bank\Entities;

use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    protected $guarded = ['id'];
    public function transactions()
    {
        return $this->hasMany('Modules/Bank/entities/Transaction','transaction_type_id','id');
    }
}
