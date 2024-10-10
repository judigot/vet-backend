<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Payment;
use App\Models\Pet;
use App\Models\Vet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointment';

    protected $primaryKey = 'appointment_id';

    protected $fillable = [
        'appointment_date',
        'vet_id',
        'status',
        'notes',
        'pet_id'
    ];
    public function vet()
    {
        return $this->belongsTo(Vet::class, 'vet_id');
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }


    public function payments()
    {
        return $this->hasMany(Payment::class, 'appointment_id');
    }
}
