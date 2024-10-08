<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\Pet;
use Illuminate\Support\Collection;

class PetService
{
    /**
     * Get all pet records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Pet::all();
    }

    /**
     * Get a pet record by ID.
     *
     * @param int $id
     * @return Pet|null
     */
    public function getById(int $id): ?Pet
    {
        return Pet::find($id);
    }

    /**
     * Create a new pet record.
     *
     * @param array $data
     * @return Pet
     */
    public function create(array $data): Pet
    {
        return Pet::create($data);
    }

    /**
     * Update a pet record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $pet = Pet::find($id);
        if ($pet) {
            return $pet->update($data);
        }
        return false;
    }

    /**
     * Delete a pet record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $pet = Pet::find($id);
        if ($pet) {
            return $pet->delete();
        }
        return false;
    }
}
