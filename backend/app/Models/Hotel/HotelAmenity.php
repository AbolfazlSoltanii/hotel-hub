<?php

namespace App\Models\Hotel;

use Illuminate\Database\Eloquent\Model;

class HotelAmenity extends Model
{
    protected $table = 'hotel_amenities';

    protected $fillable = [
        'hotel_id',
        'amenity_id',
    ];
}
