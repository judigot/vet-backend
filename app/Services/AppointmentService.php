<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\Appointment;
use Illuminate\Support\Collection;

class AppointmentService
{
    /**
     * Get all appointment records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Appointment::all();
    }

    /**
     * Get a appointment record by ID.
     *
     * @param int $id
     * @return Appointment|null
     */
    public function getById(int $id): ?Appointment
    {
        return Appointment::find($id);
    }

    /**
     * Create a new appointment record.
     *
     * @param array $data
     * @return Appointment
     */
    public function create(array $data): Appointment
    {
        return Appointment::create($data);
    }

    /**
     * Update a appointment record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $appointment = Appointment::find($id);
        if ($appointment) {
            return $appointment->update($data);
        }
        return false;
    }

    /**
     * Delete a appointment record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $appointment = Appointment::find($id);
        if ($appointment) {
            return $appointment->delete();
        }
        return false;
    }
}
