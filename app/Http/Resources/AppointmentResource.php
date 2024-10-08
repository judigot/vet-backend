<?php
/* Owner: App Scaffolder */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentResource extends JsonResource
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
            'pet_id' => $this->pet_id,
            'vet_id' => $this->vet_id,
            'appointment_date' => $this->appointment_date,
            'appointment_id' => $this->appointment_id,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
            'notes' => $this->notes,
            'status' => $this->status,
            'users' => UserResource::collection($this->whenLoaded('user')),
        ];
    }
}
