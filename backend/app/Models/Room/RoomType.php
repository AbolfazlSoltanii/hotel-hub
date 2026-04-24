<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table = 'room_types';

    protected $fillable = [
        'code',
        'title'
    ];
}
