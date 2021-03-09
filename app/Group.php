<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public function users(){

    	return $this->belongsToMany(User::class,'user__groups','group_id' ,'user_id');
    }     
    public function permissions(){

        return $this->belongsToMany(Permission::class,'group__permissions','group_id','perm_id');
    }
}
