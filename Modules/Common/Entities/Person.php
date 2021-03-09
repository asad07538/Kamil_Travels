<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = ['id'];


// Common
    public function phones()
    {
        return $this->belongsToMany('Modules\Common\Entities\Phone','person_phones','person_id','phone_id');
    }
    public function emails()
    {
        return $this->belongsToMany('Modules\Common\Entities\Email','person_emails','person_id','email_id');
    }
    public function address()
    {
        return $this->belongsToMany('Modules\Common\Entities\Address','person_addresses','person_id','address_id');
    }
    public function faxes()
    {
        return $this->belongsToMany('Modules\Common\Entities\Fax','person_faxes','person_id','fax_id');
    }
    // public function person()
    // {
    //     return $this->hasOne('Modules\Common\Entities\Person','person_id','id');
    // }

    public function nationality()
    {
        return $this->belongsTo('Modules\Common\Entities\Country','country_id','id');
    }


// Reservation
    public function tickets()
    {
        return $this->hasMany('Modules\Reservation\Entities\Passenger','person_id','id');
    }


    public function reservations()
    {
        return $this->belongsToMany('Modules/Reservation/Entities/Reservation','contact_people','person_id','reservation_id');
    }
//Customer
    public function customer()
    {
        return $this->hasMany('Modules\Customer\Entities\Customer','person_id','id');
    }
// Employee
    public function employee()
    {
        return $this->hasMany('Modules\Employee\Entities\Employee','person_id','id');
    }
// Employee
    public function airlines()
    {
        return $this->hasMany('Modules\Supplier\Entities\Airline','person_id','id');
    }


// Car
    public function car_bookings_passenger()
    {
        return $this->hasMany('Modules\Car\Entities\CarBookingPassengers','person_id','id');
    }
    public function car_company_contact_person()
    {
        return $this->hasMany('Modules\Car\Entities\CarCompany','contact_person','id');
    }

// hotel
    public function hotel_contact_person()
    {
        return $this->hasMany('Modules\Hotel\Entities\Hotel','person_id','id');
    }

    public function hotel_guest()
    {
        return $this->hasMany('Modules\Hotel\Entities\HotelBookingGuest','person_id','id');
    }

}
