<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Appointment;
use App\Models\MedicalRecord;
use App\Models\Photo;
use App\Models\User;
use App\Models\VaccinationSchedule;
use App\Models\Vet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pet';

    protected $primaryKey = 'pet_id';

    protected $fillable = [
        'user_id',
        'name',
        'breed',
        'age',
        'weight',
        'medical_history',
        'status'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function vaccinationSchedules()
    {
        return $this->hasMany(VaccinationSchedule::class, 'pet_id');
    }


    public function medicalRecords()
    {
        return $this->belongsToMany(Vet::class, 'medical_record', 'pet_id', 'vet_id');
    }

    public function photos()
    {
        return $this->belongsToMany(User::class, 'photo', 'pet_id', 'user_id');
    }
}
