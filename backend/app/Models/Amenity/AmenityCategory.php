<?php

namespace App\Models\Amenity;

use Illuminate\Database\Eloquent\Model;

class AmenityCategory extends Model
{
    protected $table = 'amenity_categories';

    protected $fillable = [
        'code',
        'title'
    ];
}
