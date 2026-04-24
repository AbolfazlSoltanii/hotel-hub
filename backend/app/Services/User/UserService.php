<?php

namespace App\Services\User;

use App\Repositories\User\UserRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

readonly class UserService
{
    public function __construct(
        private UserRepository $userRepository
    )
    {
    }

    public function index(): Collection
    {
        return $this->userRepository->index();
    }

    public function get(int $id)
    {
        return $this->userRepository->get($id);
    }

    /**
     * @throws Throwable
     */
    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {
            $data['password'] = Hash::make($data['password']);

            $roleIds = $data['role_ids'];

            $profileData = [
                'first_name' => $data['first_name'],
                'last_name' => $data['first_name'],
            ];

            unset($data['first_name'], $data['last_name']);

            $user = $this->userRepository->create($data);

            $user->roles()->sync($roleIds);

            $user->profile()?->create($profileData);

            return $user;
        });
    }

    /**
     * @throws Throwable
     */
    public function update(array $data, int $id)
    {
        return DB::transaction(function () use ($data, $id) {
            if (isset($data['password'])) {
                $data['password'] = Hash::make($data['password']);
            }

            $result = $this->userRepository->update($data, $id);

            if (isset($data['role_ids'])) {
                $roleIds = $data['role_ids'];
                $user = $this->get($id);

                $user?->roles()->sync($roleIds);
            }

            return $result;
        });
    }

    public function delete(int $id): ?bool
    {
        return $this->userRepository->delete($id);
    }

    public function isManagerExists(int $userId): bool
    {
        return $this->userRepository->isManagerExists($userId);
    }

    public function getByPhone(string $phone)
    {
        return $this->userRepository->getByPhone($phone);
    }
}
