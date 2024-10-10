<?php
/* Owner: App Scaffolder */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VaccinationScheduleResource extends JsonResource
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
            'vaccine_name' => $this->vaccine_name,
            'vaccination_schedule_id' => $this->vaccination_schedule_id,
            'updated_at' => $this->updated_at,
            'status' => $this->status,
            'pet_id' => $this->pet_id,
            'due_date' => $this->due_date,
        ];
    }
}
