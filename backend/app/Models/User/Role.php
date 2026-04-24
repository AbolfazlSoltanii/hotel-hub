<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'code',
        'title'
    ];

    public const MANAGER_CODE = 'manager';
}
