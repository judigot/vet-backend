<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\UserUserType;
use Illuminate\Support\Collection;

class UserUserTypeService
{
    /**
     * Get all user_user_type records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return UserUserType::all();
    }

    /**
     * Get a user_user_type record by ID.
     *
     * @param int $id
     * @return UserUserType|null
     */
    public function getById(int $id): ?UserUserType
    {
        return UserUserType::find($id);
    }

    /**
     * Create a new user_user_type record.
     *
     * @param array $data
     * @return UserUserType
     */
    public function create(array $data): UserUserType
    {
        return UserUserType::create($data);
    }

    /**
     * Update a user_user_type record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $user_user_type = UserUserType::find($id);
        if ($user_user_type) {
            return $user_user_type->update($data);
        }
        return false;
    }

    /**
     * Delete a user_user_type record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $user_user_type = UserUserType::find($id);
        if ($user_user_type) {
            return $user_user_type->delete();
        }
        return false;
    }
}
