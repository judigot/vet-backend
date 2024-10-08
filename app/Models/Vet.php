<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Appointment;
use App\Models\Clinic;
use App\Models\MedicalRecord;
use App\Models\Pet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vet extends Model
{
    use HasFactory;

    protected $table = 'vet';

    protected $primaryKey = 'vet_id';

    protected $fillable = [
        'clinic_id',
        'first_name',
        'last_name',
        'specialty',
        'phone_number',
        'email'
    ];
    public function clinic()
    {
        return $this->belongsTo(Clinic::class, 'clinic_id');
    }


    public function medicalRecords()
    {
        return $this->belongsToMany(Pet::class, 'medical_record', 'vet_id', 'pet_id');
    }
}
