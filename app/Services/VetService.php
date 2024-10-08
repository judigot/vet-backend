<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\Vet;
use Illuminate\Support\Collection;

class VetService
{
    /**
     * Get all vet records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Vet::all();
    }

    /**
     * Get a vet record by ID.
     *
     * @param int $id
     * @return Vet|null
     */
    public function getById(int $id): ?Vet
    {
        return Vet::find($id);
    }

    /**
     * Create a new vet record.
     *
     * @param array $data
     * @return Vet
     */
    public function create(array $data): Vet
    {
        return Vet::create($data);
    }

    /**
     * Update a vet record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $vet = Vet::find($id);
        if ($vet) {
            return $vet->update($data);
        }
        return false;
    }

    /**
     * Delete a vet record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $vet = Vet::find($id);
        if ($vet) {
            return $vet->delete();
        }
        return false;
    }
}
