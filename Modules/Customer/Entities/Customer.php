<?php

namespace Modules\Customer\Entities;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = ['id'];
    public function person()
    {
        return $this->belongsTo('Modules\Common\Entities\Person','person_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

// Accounts // Not reverse linked 
    public function general_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','account_head_id','id');
    }
    public function refund_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','refund_id','id');
    }
    public function agreement_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','agreement_account_id','id');
    }



}
