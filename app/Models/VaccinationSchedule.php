<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VaccinationSchedule extends Model
{
    use HasFactory;

    protected $table = 'vaccination_schedule';

    protected $primaryKey = 'vaccination_schedule_id';

    protected $fillable = [
        'pet_id',
        'vaccine_name',
        'due_date',
        'status'
    ];
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }
}
