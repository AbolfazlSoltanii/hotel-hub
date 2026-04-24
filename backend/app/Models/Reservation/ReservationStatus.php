<?php

namespace App\Models\Reservation;

use Illuminate\Database\Eloquent\Model;

class ReservationStatus extends Model
{
    protected $table = 'reservation_statuses';

    protected $fillable = [
        'code',
        'title'
    ];
    public const CANCELLED = 3;
    public const COMPLETED = 4;
}
