<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Payment;
use App\Models\Pet;
use App\Models\User;
use App\Models\Vet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointment';

    protected $primaryKey = 'appointment_id';

    protected $fillable = [
        'pet_id',
        'vet_id',
        'appointment_date',
        'notes',
        'status'
    ];
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

    public function vet()
    {
        return $this->belongsTo(Vet::class, 'vet_id');
    }


    public function payments()
    {
        return $this->belongsToMany(User::class, 'payment', 'appointment_id', 'user_id');
    }
}
