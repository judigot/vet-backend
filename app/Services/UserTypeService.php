<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\UserType;
use Illuminate\Support\Collection;

class UserTypeService
{
    /**
     * Get all user_type records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return UserType::all();
    }

    /**
     * Get a user_type record by ID.
     *
     * @param int $id
     * @return UserType|null
     */
    public function getById(int $id): ?UserType
    {
        return UserType::find($id);
    }

    /**
     * Create a new user_type record.
     *
     * @param array $data
     * @return UserType
     */
    public function create(array $data): UserType
    {
        return UserType::create($data);
    }

    /**
     * Update a user_type record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $user_type = UserType::find($id);
        if ($user_type) {
            return $user_type->update($data);
        }
        return false;
    }

    /**
     * Delete a user_type record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $user_type = UserType::find($id);
        if ($user_type) {
            return $user_type->delete();
        }
        return false;
    }
}
