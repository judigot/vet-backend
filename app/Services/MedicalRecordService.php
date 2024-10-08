<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\MedicalRecord;
use Illuminate\Support\Collection;

class MedicalRecordService
{
    /**
     * Get all medical_record records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return MedicalRecord::all();
    }

    /**
     * Get a medical_record record by ID.
     *
     * @param int $id
     * @return MedicalRecord|null
     */
    public function getById(int $id): ?MedicalRecord
    {
        return MedicalRecord::find($id);
    }

    /**
     * Create a new medical_record record.
     *
     * @param array $data
     * @return MedicalRecord
     */
    public function create(array $data): MedicalRecord
    {
        return MedicalRecord::create($data);
    }

    /**
     * Update a medical_record record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $medical_record = MedicalRecord::find($id);
        if ($medical_record) {
            return $medical_record->update($data);
        }
        return false;
    }

    /**
     * Delete a medical_record record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $medical_record = MedicalRecord::find($id);
        if ($medical_record) {
            return $medical_record->delete();
        }
        return false;
    }
}
