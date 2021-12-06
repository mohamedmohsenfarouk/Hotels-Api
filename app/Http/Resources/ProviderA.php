<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderA extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Hotel' => $this->hotel,
            'Rate' => $this->rate,
            'Fare' => $this->fare,
            'roomAmenities' => $this->room_amenities,
        ];
    }
}
