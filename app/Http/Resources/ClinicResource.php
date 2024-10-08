<?php
/* Owner: App Scaffolder */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClinicResource extends JsonResource
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
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'name' => $this->name,
            'clinic_id' => $this->clinic_id,
            'vets' => VetResource::collection($this->whenLoaded('vet')),
        ];
    }
}
