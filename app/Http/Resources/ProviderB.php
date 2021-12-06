<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProviderB extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $amentities = explode(",", $this->amentities);
        if (!empty($this->discount)) {
            $data = [
                'hotelName' => $this->hotel_name,
                'Rate' => $this->rate,
                'Price' => $this->price,
                'amenities' => $amentities,
                'discount' => $this->discount,
            ];
        } else {
            $data = [
                'hotelName' => $this->hotel_name,
                'Rate' => $this->rate,
                'Price' => $this->price,
                'amenities' => $amentities,
            ];
        }
        return $data;
    }
}
