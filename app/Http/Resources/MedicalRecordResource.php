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
            'created_at' => $this->created_at,
            'diagnosis' => $this->diagnosis,
            'medical_record_id' => $this->medical_record_id,
            'pet_id' => $this->pet_id,
            'prescription' => $this->prescription,
            'treatment' => $this->treatment,
            'vet_id' => $this->vet_id,
            'visit_date' => $this->visit_date,
        ];
    }
}
