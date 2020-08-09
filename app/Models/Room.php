<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'roomNumber',
        'beds',
        'tv',
        'terrace',
        'hotel_id'
    ];

    public function customers(){
        return $this->belongsToMany('App\Models\Customer','room_customer','room_id','customer_id')
                    ->withTimestamps();
    }
}
