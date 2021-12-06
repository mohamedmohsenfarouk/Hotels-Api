<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProviderA extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provider_a')->insert([
            array(
                'id' => 1,
                'hotel' => "Dubai International Terminal Hotel",
                'rate' => 5,
                'fare' => 3306,
                'room_amenities' => 'Safety Deposit Box,Meeting Rooms,Air Conditioning,Business Center,Concierge,Elevators,Foreign Currency Exchange,Sauna',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => 2,
                'hotel' => "Media Rotana Dubai",
                'rate' => 5,
                'fare' => 1307,
                'room_amenities' => 'Air Conditioning,Business Center,Concierge,Elevators,Foreign Currency Exchange,Sauna',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => 3,
                'hotel' => "Queen's Hotel",
                'rate' => 2,
                'fare' => 881,
                'room_amenities' => 'Restaurant,Laundry Service,Tour Desk,Multilingual Staff,Doctor On Call',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => 4,
                'hotel' => "Icon Hotel Apartments",
                'rate' => 3,
                'fare' => 1048,
                'room_amenities' => 'Business Center,Concierge,Elevators,Foreign Currency Exchange,Sauna',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ),
            array(
                'id' => 5,
                'hotel' => "Dubai International Terminal Hotel",
                'rate' => 3,
                'fare' => 1114,
                'room_amenities' => 'Spa,Kids Pool,Gymnasium,Swimming Pool - Outdoor,Restaurant',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            )
        ]);
    }
}
