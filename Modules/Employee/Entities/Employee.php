<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
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
        return $this->belongsTo('Modules\Account\Entities\AccountHead','ticketing_account_id','id');
    }
    public function salary_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','salary_account_id','id');
    }
    public function loan_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','loan_account_id','id');
    }
    public function mistake_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','mistake_account_id','id');
    }
    public function allowed_expance_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','allowed_expance_account_id','id');
    }
}
