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
            'contact_name' => $this->contact_name,
            'created_at' => $this->created_at,
            'emergency_contact_id' => $this->emergency_contact_id,
            'phone_number' => $this->phone_number,
            'relationship' => $this->relationship,
            'updated_at' => $this->updated_at,
            'user_id' => $this->user_id,
        ];
    }
}
