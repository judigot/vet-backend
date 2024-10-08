<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\VaccinationSchedule;
use Illuminate\Support\Collection;

class VaccinationScheduleService
{
    /**
     * Get all vaccination_schedule records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return VaccinationSchedule::all();
    }

    /**
     * Get a vaccination_schedule record by ID.
     *
     * @param int $id
     * @return VaccinationSchedule|null
     */
    public function getById(int $id): ?VaccinationSchedule
    {
        return VaccinationSchedule::find($id);
    }

    /**
     * Create a new vaccination_schedule record.
     *
     * @param array $data
     * @return VaccinationSchedule
     */
    public function create(array $data): VaccinationSchedule
    {
        return VaccinationSchedule::create($data);
    }

    /**
     * Update a vaccination_schedule record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $vaccination_schedule = VaccinationSchedule::find($id);
        if ($vaccination_schedule) {
            return $vaccination_schedule->update($data);
        }
        return false;
    }

    /**
     * Delete a vaccination_schedule record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $vaccination_schedule = VaccinationSchedule::find($id);
        if ($vaccination_schedule) {
            return $vaccination_schedule->delete();
        }
        return false;
    }
}
