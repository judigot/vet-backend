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
            'updated_at' => $this->updated_at,
            'vaccination_schedule_id' => $this->vaccination_schedule_id,
            'pet_id' => $this->pet_id,
            'vaccine_name' => $this->vaccine_name,
            'due_date' => $this->due_date,
            'status' => $this->status,
            'created_at' => $this->created_at,
        ];
    }
}
