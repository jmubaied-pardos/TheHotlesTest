<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name', 'email', 'address', 'phone',
    ];

    public function rooms(){
        return $this->hasMany('App/Models/Room');
    }
}
