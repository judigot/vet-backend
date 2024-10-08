<?php
/* Owner: App Scaffolder */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmergencyContactResource extends JsonResource
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
            'user_id' => $this->user_id,
            'emergency_contact_id' => $this->emergency_contact_id,
            'contact_name' => $this->contact_name,
            'phone_number' => $this->phone_number,
            'relationship' => $this->relationship,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
