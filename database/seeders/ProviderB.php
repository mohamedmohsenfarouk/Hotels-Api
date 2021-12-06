<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProviderB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provider_b')->insert([
            array(
                'id' => 1,
                'hotel_name' => "Kempinski Nile Hotel Garden City",
                'rate' => '*****',
                'price' => 9219,
                'amentities' => 'Safety Deposit Box,Meeting Rooms,Air Conditioning,Business Center,Concierge,Elevators,Foreign Currency Exchange,Sauna',
                'discount' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => 2,
                'hotel_name' => "Le Sphinx Hotel",
                'rate' => '*****',
                'price' => 9234,
                'amentities' => 'Air Conditioning,Business Center,Concierge,Elevators,Foreign Currency Exchange,Sauna',
                'discount' => 10,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => 3,
                'hotel_name' => "Queen's Hotel",
                'rate' => '***',
                'price' => 2345,
                'amentities' => 'Restaurant,Laundry Service,Tour Desk,Multilingual Staff,Doctor On Call',
                'discount' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => 4,
                'hotel_name' => "Holiday Inn",
                'rate' => '****',
                'price' => 4450,
                'amentities' => 'Business Center,Concierge,Elevators,Foreign Currency Exchange,Sauna',
                'discount' => 120,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => 5,
                'hotel_name' => "Al Masah Hotel And Spa",
                'rate' => '**',
                'price' => 3100,
                'amentities' => 'Spa,Kids Pool,Gymnasium,Swimming Pool - Outdoor,Restaurant',
                'discount' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        ]);
    }
}
