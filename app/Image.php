<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $guarded = [];
    public function RoomType(){

        return $this->belongsTo(RoomType::class,'room_type_id');
    }
}
