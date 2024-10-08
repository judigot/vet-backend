<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Collection;

class UserService
{
    /**
     * Get all user records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return User::all();
    }

    /**
     * Get a user record by ID.
     *
     * @param int $id
     * @return User|null
     */
    public function getById(int $id): ?User
    {
        return User::find($id);
    }

    /**
     * Create a new user record.
     *
     * @param array $data
     * @return User
     */
    public function create(array $data): User
    {
        return User::create($data);
    }

    /**
     * Update a user record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $user = User::find($id);
        if ($user) {
            return $user->update($data);
        }
        return false;
    }

    /**
     * Delete a user record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $user = User::find($id);
        if ($user) {
            return $user->delete();
        }
        return false;
    }
}
