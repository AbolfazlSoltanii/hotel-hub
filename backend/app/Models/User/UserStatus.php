<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class UserStatus extends Model
{
    protected $table = 'user_statuses';

    protected $fillable = [
        'code',
        'title'
    ];
}
