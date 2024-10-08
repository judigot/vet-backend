<?php
/* Owner: App Scaffolder */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VetResource extends JsonResource
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
            'vet_id' => $this->vet_id,
            'clinic_id' => $this->clinic_id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'specialty' => $this->specialty,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'pets' => PetResource::collection($this->whenLoaded('pet')),
            'pets' => PetResource::collection($this->whenLoaded('pet')),
        ];
    }
}
