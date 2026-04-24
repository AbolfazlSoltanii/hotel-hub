<?php

namespace App\Repositories\User;

use App\Models\User\Role;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Collection;

readonly class UserRepository
{
    public function __construct(
        private User $user
    )
    {
    }

    public function index(): Collection
    {
        return $this->user->all();
    }

    public function get(int $id)
    {
        return $this->user->query()->find($id);
    }

    public function create(array $data)
    {
        return $this->user->query()->create($data);
    }

    public function update(array $data, int $id): ?bool
    {
        return $this->user->query()
            ->find($id)
            ?->update($data);
    }

    public function delete(int $id): ?bool
    {
        return $this->user->query()
            ->find($id)
            ?->delete();
    }

    public function isManagerExists(int $userId): bool
    {
        return User::query()
            ->find($userId)
            ?->roles()
            ->where('code', Role::MANAGER_CODE)
            ->exists();
    }
}
