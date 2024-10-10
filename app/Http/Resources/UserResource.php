<?php
/* Owner: App Scaffolder */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'user_id' => $this->user_id,
            'phone_number' => $this->phone_number,
            'password_hash' => $this->password_hash,
            'last_name' => $this->last_name,
            'first_name' => $this->first_name,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'user_types' => UserTypeResource::collection($this->whenLoaded('user_type')),
            'pets' => PetResource::collection($this->whenLoaded('pet')),
            'appointments' => AppointmentResource::collection($this->whenLoaded('appointment')),
        ];
    }
}
