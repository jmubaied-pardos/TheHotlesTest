<?php

namespace App\Http\Controllers;

use App\Http\Resources\HotelResource;
use App\Models\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Hotel[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Hotel::all();

    }

    /**
     * Display the specified resource.
     *
     * @param Hotel $hotel
     * @return HotelResource
     */
    public function show(Hotel $hotel)
    {
        return new HotelResource($hotel);
    }

}
