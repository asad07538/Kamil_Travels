<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function groups(){
        return $this->belongsToMany(Group::class,'user__groups','user_id','group_id');
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class,'user__permissions','user_id','permission_id');
    }

// Reservation Modules
    public function created_by()
    {
        return $this->hasMany('Modules/Reservation/Entities/Reservation','user_id','id');
    }

    // 
    public function employee()
    {
        return $this->hasOne('Modules\Employee\Entities\Employee','user_id','id');
    }
    // 
    public function customer()
    {
        return $this->hasOne('Modules\Customer\Entities\Customer','user_id','id');
    }


// Account Modules
    public function accounts_created()
    {
        return $this->hasMany('Modules/Account/Entities/AccountHead','added_by','id');
    }
    //entry
    public function entries_created()
    {
        return $this->hasMany('Modules/Account/Entities/Entry','made_by_id','id');
    }
    public function entries_inserted()
    {
        return $this->hasMany('Modules/Account/Entities/Entry','inserted_by_id','id');
    }


// Bank Modules

    public function bank_transactions()
    {
        return $this->hasMany('Modules\Bank\Entities\Transaction','made_by_id','id');
    }
}
