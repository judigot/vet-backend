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
            'name' => $this->name,
            'weight' => $this->weight,
            'user_id' => $this->user_id,
            'updated_at' => $this->updated_at,
            'status' => $this->status,
            'pet_id' => $this->pet_id,
            'medical_history' => $this->medical_history,
            'created_at' => $this->created_at,
            'breed' => $this->breed,
            'age' => $this->age,
            'users' => UserResource::collection($this->whenLoaded('user')),
            'vets' => VetResource::collection($this->whenLoaded('vet')),
            'vets' => VetResource::collection($this->whenLoaded('vet')),
        ];
    }
}
