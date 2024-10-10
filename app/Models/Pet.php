<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Appointment;
use App\Models\MedicalRecord;
use App\Models\Photo;
use App\Models\User;
use App\Models\VaccinationSchedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pet';

    protected $primaryKey = 'pet_id';

    protected $fillable = [
        'name',
        'weight',
        'user_id',
        'status',
        'medical_history',
        'breed',
        'age'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'pet_id');
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class, 'pet_id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'pet_id');
    }

    public function vaccinationSchedules()
    {
        return $this->hasMany(VaccinationSchedule::class, 'pet_id');
    }
}
