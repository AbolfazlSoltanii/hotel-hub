<?php

namespace App\Repositories\User;

use App\Models\User\Gender;
use Illuminate\Database\Eloquent\Collection;

readonly class GenderRepository
{
    public function __construct(
        private Gender $gender
    )
    {
    }

    public function index(): Collection
    {
        return $this->gender->all();
    }
}
