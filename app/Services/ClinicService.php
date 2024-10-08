<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\Clinic;
use Illuminate\Support\Collection;

class ClinicService
{
    /**
     * Get all clinic records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Clinic::all();
    }

    /**
     * Get a clinic record by ID.
     *
     * @param int $id
     * @return Clinic|null
     */
    public function getById(int $id): ?Clinic
    {
        return Clinic::find($id);
    }

    /**
     * Create a new clinic record.
     *
     * @param array $data
     * @return Clinic
     */
    public function create(array $data): Clinic
    {
        return Clinic::create($data);
    }

    /**
     * Update a clinic record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $clinic = Clinic::find($id);
        if ($clinic) {
            return $clinic->update($data);
        }
        return false;
    }

    /**
     * Delete a clinic record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $clinic = Clinic::find($id);
        if ($clinic) {
            return $clinic->delete();
        }
        return false;
    }
}
