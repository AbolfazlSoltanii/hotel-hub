<?php

namespace App\Models\Room;

use Illuminate\Database\Eloquent\Model;

class RoomStatus extends Model
{
    protected $table = 'room_statuses';

    protected $fillable = [
        'code',
        'title'
    ];
}
