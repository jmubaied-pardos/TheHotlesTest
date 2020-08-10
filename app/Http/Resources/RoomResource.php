<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'roomNumber' => $this->roomNumber,
            'beds' => $this->beds,
            'tv' => $this->tv,
            'terrace' => $this->terrace,
            'customer' => CustomerResource::collection($this->customers)
        ];
    }
}
