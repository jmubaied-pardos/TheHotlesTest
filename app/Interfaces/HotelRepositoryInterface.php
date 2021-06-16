<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface HotelRepositoryInterface
{
    public function create(array $attributes): Model;
}
