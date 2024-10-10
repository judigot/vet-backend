<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Vet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clinic extends Model
{
    use HasFactory;

    protected $table = 'clinic';

    protected $primaryKey = 'clinic_id';

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'address'
    ];
    public function vets()
    {
        return $this->hasMany(Vet::class, 'clinic_id');
    }
}
