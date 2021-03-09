<?php

namespace Modules\Account\Entities;

use Illuminate\Database\Eloquent\Model;

class AccountHead extends Model
{
    protected $guarded = ['id'];


    public function bookings()
    {
        return $this->hasMany('Modules\Booking\Entities\Booking','customer_id','id');
    }
// self
    public function level()
    {
        return $this->belongsTo('Modules\Account\Entities\AccountLevel','level_id','id');
    }
    public function parent()
    {
        return $this->belongsTo('Modules\Account\entities\AccountHead','parent_id','id');
    }
    public function child()
    {
        return $this->hasMany('Modules\Account\entities\AccountHead','parent_id','id');
    }
// User
    public function added_by()
    {
        return $this->belongsTo('App\User','added_by','id');
    }


// Account
    public function entries()
    {
        return $this->hasMany('Modules\Account\entities\Entry','on_account_id','id');
    }
    public function entry_items()
    {
        return $this->hasMany('Modules\Account\entities\EntryItem','account_id','id');
    }
// ///Banks
    public function bank()
    {
        return $this->hasMany('Modules\Bank\entities\BankAccounts','account_head_id','id');
    }
    public function bank_transactions_from()
    {
        return $this->belongsTo('Modules\Bank\entities\Transaction','from_account_id','id');
    }
    public function bank_transactions_to()
    {
        return $this->belongsTo('Modules\Bank\entities\Transaction','to_account_id','id');
    }

    // PNR

    public function pnrs()
    {
        return $this->hasMany('Modules\Ticket\Entities\PNR','airline_id','id');
    }

    // car

    public function car_company()
    {
        return $this->hasOne('Modules\Car\Entities\CarCompany','account_head_id','id');
    }

    // Hotel
    public function hotel()
    {
        return $this->hasOne('Modules\Hotel\Entities\Hotel','booking_account_id','id');
    }
}
