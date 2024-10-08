<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\EmergencyContact;
use Illuminate\Support\Collection;

class EmergencyContactService
{
    /**
     * Get all emergency_contact records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return EmergencyContact::all();
    }

    /**
     * Get a emergency_contact record by ID.
     *
     * @param int $id
     * @return EmergencyContact|null
     */
    public function getById(int $id): ?EmergencyContact
    {
        return EmergencyContact::find($id);
    }

    /**
     * Create a new emergency_contact record.
     *
     * @param array $data
     * @return EmergencyContact
     */
    public function create(array $data): EmergencyContact
    {
        return EmergencyContact::create($data);
    }

    /**
     * Update a emergency_contact record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $emergency_contact = EmergencyContact::find($id);
        if ($emergency_contact) {
            return $emergency_contact->update($data);
        }
        return false;
    }

    /**
     * Delete a emergency_contact record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $emergency_contact = EmergencyContact::find($id);
        if ($emergency_contact) {
            return $emergency_contact->delete();
        }
        return false;
    }
}
