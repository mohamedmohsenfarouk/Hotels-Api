<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderB extends Model
{
    use HasFactory;

    protected $table = 'provider_b';

    protected $fillable = [
        'hotel_name', 'rate', 'price', 'amentities', 'discount', 'city_code', 'no_adults'
    ];

    // protected $casts = [
    //     'amentities' => 'array'
    // ];
}
