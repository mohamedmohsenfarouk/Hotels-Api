<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController as BaseController;
use App\Http\Resources\ProviderB as ProviderBResource;
use App\Http\Resources\ProviderA as ProviderAResource;
use App\Models\ProviderA;
use App\Models\ProviderB;
use Response;

class HotelController extends BaseController
{
    public function provider_a()
    {
        $hotels = ProviderA::all();

        return $this->sendResponse(ProviderAResource::collection($hotels), 'Provider A hotels retrieved successfully.');
    }

    public function provider_b()
    {
        $hotels = ProviderB::all();

        return $this->sendResponse(ProviderBResource::collection($hotels), 'Provider B hotels retrieved successfully.');
    }

    public function all_data()
    {
        $hotels_a = ProviderA::all();
        $hotels_b = ProviderB::all();

        $response_a = $this->sendResponse(ProviderAResource::collection($hotels_a), 'Provider A hotels retrieved successfully.');
        $response_b = $this->sendResponse(ProviderBResource::collection($hotels_b), 'Provider B hotels retrieved successfully.');

        return array(
            'Provider A' => $response_a,
            'Provider B' => $response_b,
        );
    }
}
