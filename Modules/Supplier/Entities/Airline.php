<?php

namespace Modules\Supplier\Entities;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $guarded = ['id'];

    public function reservations()
    {
        return $this->hasMany('Modules/Reservation/Entities/Reservation','airline_id','id');
    }


    public function ticketing_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','ticketing_account','id');
    }
    public function commission_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','commisison_account','id');
    }
    public function refund_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','refund_account','id');
    }
    public function service_charge_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','service_charge_account_id','id');
    }
    public function wht_account()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','wht_account','id');
    }
    public function agreement()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','agreement_account_id','id');
    }
    public function contact_person()
    {
        return $this->belongsTo('Modules\Common\Entities\Person','contact_person_id','id');
    }

// Flight Relations
    public function flights()
    {
        return $this->hasMany('Modules\Flight\Entities\Flight','airline_id','id');
    }
}
