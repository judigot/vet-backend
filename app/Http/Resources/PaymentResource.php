<?php
/* Owner: App Scaffolder */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'created_at' => $this->created_at,
            'payment_method' => $this->payment_method,
            'payment_status' => $this->payment_status,
            'payment_date' => $this->payment_date,
            'amount' => $this->amount,
            'user_id' => $this->user_id,
            'appointment_id' => $this->appointment_id,
            'payment_id' => $this->payment_id,
        ];
    }
}
