<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Appointment;
use App\Models\Clinic;
use App\Models\MedicalRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vet extends Model
{
    use HasFactory;

    protected $table = 'vet';

    protected $primaryKey = 'vet_id';

    protected $fillable = [
        'clinic_id',
        'email',
        'first_name',
        'last_name',
        'phone_number',
        'specialty'
    ];
    public function clinic()
    {
        return $this->belongsTo(Clinic::class, 'clinic_id');
    }


    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'vet_id');
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class, 'vet_id');
    }
}
