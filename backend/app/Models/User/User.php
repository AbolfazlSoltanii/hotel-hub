<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use SoftDeletes, HasApiTokens;

    protected $table = 'users';

    protected $fillable = [
        'user_status_id',
        'email',
        'phone',
        'password',
        'verified_at',
        'first_name',
        'last_name',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'user_roles');
    }

    public function profile(): ?HasOne
    {
        return $this->hasOne(UserProfile::class, 'user_id');
    }
}
