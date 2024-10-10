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
            'appointment_id' => $this->appointment_id,
            'appointment_date' => $this->appointment_date,
            'vet_id' => $this->vet_id,
            'updated_at' => $this->updated_at,
            'status' => $this->status,
            'notes' => $this->notes,
            'created_at' => $this->created_at,
            'pet_id' => $this->pet_id,
            'users' => UserResource::collection($this->whenLoaded('user')),
        ];
    }
}
