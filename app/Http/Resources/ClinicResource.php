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
            'name' => $this->name,
            'updated_at' => $this->updated_at,
            'phone_number' => $this->phone_number,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'clinic_id' => $this->clinic_id,
            'address' => $this->address,
            'vets' => VetResource::collection($this->whenLoaded('vet')),
        ];
    }
}
