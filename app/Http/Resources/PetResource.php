<?php
/* Owner: App Scaffolder */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PetResource extends JsonResource
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
            'pet_id' => $this->pet_id,
            'user_id' => $this->user_id,
            'name' => $this->name,
            'breed' => $this->breed,
            'age' => $this->age,
            'weight' => $this->weight,
            'medical_history' => $this->medical_history,
            'status' => $this->status,
            'updated_at' => $this->updated_at,
            'users' => UserResource::collection($this->whenLoaded('user')),
            'vets' => VetResource::collection($this->whenLoaded('vet')),
            'vets' => VetResource::collection($this->whenLoaded('vet')),
        ];
    }
}
