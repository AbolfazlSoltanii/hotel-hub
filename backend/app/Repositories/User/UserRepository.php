<?php

namespace App\Repositories\User;

use App\Models\User\Role;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

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

    public function getInfoByPhone(string $phone)
    {
        return $this->user->query()
            ->select([
                'users.*',
                'user_profiles.gender_id',
                'user_profiles.first_name',
                'user_profiles.last_name',
                'user_profiles.national_code',
                'user_profiles.birth_date',
                'user_profiles.address',
                'user_profiles.avatar',
                DB::raw('CONCAT(user_profiles.first_name, " ", user_profiles.last_name) AS full_name'),
            ])
            ->join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
            ->where('users.phone', $phone)
            ->first();
    }
}
