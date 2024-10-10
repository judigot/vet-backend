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
        'vaccine_name',
        'status',
        'pet_id',
        'due_date'
    ];
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }
}
