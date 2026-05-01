<?php

namespace App\Services\User;

use App\Repositories\User\GenderRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GenderService
{
    public function __construct(
        private GenderRepository $genderRepository,
    )
    {
    }

    public function index(): Collection
    {
        return $this->genderRepository->index();
    }
}
