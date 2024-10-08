<?php
/* Owner: App Scaffolder */

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MedicalRecordResource extends JsonResource
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
            'medical_record_id' => $this->medical_record_id,
            'pet_id' => $this->pet_id,
            'vet_id' => $this->vet_id,
            'visit_date' => $this->visit_date,
            'diagnosis' => $this->diagnosis,
            'treatment' => $this->treatment,
            'prescription' => $this->prescription,
            'created_at' => $this->created_at,
        ];
    }
}
