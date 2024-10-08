<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Pet;
use App\Models\Vet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $table = 'medical_record';

    protected $primaryKey = 'medical_record_id';

    protected $fillable = [
        'pet_id',
        'vet_id',
        'visit_date',
        'diagnosis',
        'treatment',
        'prescription'
    ];
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

    public function vet()
    {
        return $this->belongsTo(Vet::class, 'vet_id');
    }
}
