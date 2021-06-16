<?php

namespace App\Http\Controllers;

use App\Http\Resources\HotelResource;
use App\Interfaces\HotelRepositoryInterface;
use App\Models\Hotel;
use App\Repositories\Hotel\HotelRepository;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    private HotelRepository $repository;

    public function __construct(HotelRepositoryInterface $hotelRepository)
    {
        $this->repository = $hotelRepository;
    }

    public function index()
    {
        return Hotel::all();
    }

    public function show(Hotel $hotel): HotelResource
    {
        return new HotelResource($hotel);
    }

    public function store(Request $request)
    {
        $this->repository->create($request->all());
    }
}
