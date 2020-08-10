<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'identity_document' => $this->identity_document,
            'name' => $this->name,
            'surnames' => $this->surnames,
            'email' => $this->email,
            'phone' => $this->phone
        ];
    }
}
