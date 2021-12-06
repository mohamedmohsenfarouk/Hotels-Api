<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderA extends Model
{
    use HasFactory;

    protected $table = 'provider_a';

    protected $fillable = [
        'hotel', 'rate', 'fare', 'room_amenities', 'city', 'adults'
    ];
}
