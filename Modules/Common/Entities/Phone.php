<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $guarded = ['id'];

    public function persons()
    {
        return $this->belongsToMany('Modules\Common\Entities\Person','person_phones','phone_id','person_id');
    }

    public function car_companies()
    {
        return $this->belongsToMany('Modules\Car\Entities\CarCompany','car_company_phones','phone_id','car_company_id');
    }

    public function hotels()
    {
        return $this->belongsToMany('Modules\Hotel\Entities\Hotel','hotel_phones','phone_id','hotel_id');
    }


}




