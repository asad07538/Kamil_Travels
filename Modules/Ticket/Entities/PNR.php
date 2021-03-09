<?php

namespace Modules\Ticket\Entities;

use Illuminate\Database\Eloquent\Model;

class PNR extends Model
{
    // protected $fillable = [];
    protected $table = 'pnr';
    protected $guarded = ['id'];

    public function bookings()
    {
        return $this->belongsToMany('Modules\Booking\Entities\Booking','booking_tickets','pnr_id','booking_id');
    }



    // --------------------------------------------------------------------
    public function passengers()
    {
        return $this->hasMany(PnrPax::class,'pnr_id','id');
    }
    public function flights()
    {
        return $this->hasMany(PnrFlight::class,'pnr_id','id');
    }

    public function adult_fare()
    {
        return $this->belongsTo(PnrFare::class,'adult_fare_id','id');
    }
    public function child_fare()
    {
        return $this->belongsTo(PnrFare::class,'child_fare_id','id');
    }
    public function infant_fare()
    {
        return $this->belongsTo(PnrFare::class,'infant_fare_id','id');
    }




    public function created_by()
    {
        return $this->belongsTo('App\user','user_id','id');
    }
    public function airline()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountHead','airline_id','id');
    }
    public function contact_persons()
    {
        return $this->belongsToMany('Modules\Common\Entities\Person','contact_people','reservation_id','person_id');
    }
}
