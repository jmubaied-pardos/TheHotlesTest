<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name', 'email', 'address', 'phone',
    ];

    public function rooms(){
        return $this->hasMany('App\Models\Room');
    }

    public function roomsBooked($hotel_id){
        return Room::Where('hotel_id',$hotel_id)->has('customers')->get();
    }
}
