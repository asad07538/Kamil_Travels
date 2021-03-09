<?php

namespace Modules\Hotel\Entities;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $fillable = [];

    public function rooms()
    {
        return $this->hasMany(Room::class,'room_type_id','id');
    }

}
