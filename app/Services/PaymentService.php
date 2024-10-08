<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\Payment;
use Illuminate\Support\Collection;

class PaymentService
{
    /**
     * Get all payment records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Payment::all();
    }

    /**
     * Get a payment record by ID.
     *
     * @param int $id
     * @return Payment|null
     */
    public function getById(int $id): ?Payment
    {
        return Payment::find($id);
    }

    /**
     * Create a new payment record.
     *
     * @param array $data
     * @return Payment
     */
    public function create(array $data): Payment
    {
        return Payment::create($data);
    }

    /**
     * Update a payment record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $payment = Payment::find($id);
        if ($payment) {
            return $payment->update($data);
        }
        return false;
    }

    /**
     * Delete a payment record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $payment = Payment::find($id);
        if ($payment) {
            return $payment->delete();
        }
        return false;
    }
}
