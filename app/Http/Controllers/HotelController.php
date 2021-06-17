<?php

namespace App\Http\Controllers;

use App\Http\Resources\HotelResource;
use App\Interfaces\HotelRepositoryInterface;
use App\Models\Hotel;
use App\Repositories\Hotel\HotelRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HotelController extends Controller
{
    private HotelRepository $repository;

    public function __construct(HotelRepositoryInterface $hotelRepository)
    {
        $this->repository = $hotelRepository;
    }

    public function index()
    {
        return response()->json(['data' => Hotel::all()], 200) ;
    }

    public function show(Hotel $hotel): HotelResource
    {
        return new HotelResource($hotel);
    }

    public function store(Request $request): JsonResponse
    {
        $rules = [
            'name'    => 'required|string',
            'address' => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'required|string',
        ];
        $validator = Validator::make($request->input(), $rules);

        if ($validator->fails()) {
            $errorResponse['data']['error'] = 'Bad request.';
            response()->json($errorResponse, 400);
        }

        return response()->json(['data' => $this->repository->create($request->all()), 201]);
    }

    public function update(Request $request, int $id)
    {
        $rules = [
            'name'    => 'string',
            'address' => 'string',
            'email'   => 'email',
            'phone'   => 'string',
        ];

        $validator = Validator::make($request->input(), $rules);

        $errorResponse['data']['error'] = 'Bad request.';
        if ($validator->fails()) {
            return response()->json($errorResponse, 400);
        }

        $response = $this->repository->update($request->input(), $id);
        if(!empty($response)){
            return response()->json(['data' => 'UPDATED', 204]);
        }

        return response()->json($errorResponse, 400);

    }

    public function delete(int $id)
    {
        $response = $this->repository->delete($id);
        if(!empty($response)){
            return response()->json(['data' => 'DELETED', 204]);
        }
        $errorResponse['data']['error'] = 'Bad request.';

        return response()->json($errorResponse, 400);
    }

}
