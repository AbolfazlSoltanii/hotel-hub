<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class RoomImages extends Model
{
    protected $table = 'room_images';

    protected $fillable = [
        'room_id',
        'image_path',
        'is_primary',
        'sort_order',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
