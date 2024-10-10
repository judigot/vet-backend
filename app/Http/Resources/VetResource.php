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
            'clinic_id' => $this->clinic_id,
            'created_at' => $this->created_at,
            'email' => $this->email,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone_number' => $this->phone_number,
            'specialty' => $this->specialty,
            'updated_at' => $this->updated_at,
            'vet_id' => $this->vet_id,
            'pets' => PetResource::collection($this->whenLoaded('pet')),
            'pets' => PetResource::collection($this->whenLoaded('pet')),
        ];
    }
}
