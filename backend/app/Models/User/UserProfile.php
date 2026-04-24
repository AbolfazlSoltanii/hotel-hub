<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserProfile extends Model
{
    use SoftDeletes;

    protected $table = 'user_profiles';

    protected $fillable = [
        'user_id',
        'gender_id',
        'first_name',
        'last_name',
        'national_code',
        'birth_date',
        'address',
        'avatar',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
