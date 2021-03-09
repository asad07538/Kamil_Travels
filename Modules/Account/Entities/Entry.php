<?php

namespace Modules\Account\Entities;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $guarded = ['id'];

    public function entry_items()
    {
        return $this->hasMany('Modules/Account/entities/EntryItem','entry_id','id');
    }
    public function on_account()
    {
        return $this->belongsTo('Modules/Account/entities/AccountHead','on_account_id','id');
    }
    public function account_type()
    {
        return $this->belongsTo('Modules/Account/entities/EntryType','entry_type_id','id');
    }
	public function parent_entry()
    {
        return $this->belongsTo('Modules/Account/entities/Entry','on_account_id','id');
    }
	public function child_entries()
    {
        return $this->hasMany('Modules/Account/entities/Entry','on_account_id','id');
    }
    public function made_by()
    {
        return $this->belongsTo('App/User','made_by_id','id');
    }
    public function inserted_by()
    {
        return $this->belongsTo('App/User','inserted_by_id','id');
    }
}
