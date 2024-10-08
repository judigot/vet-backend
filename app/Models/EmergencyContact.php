<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmergencyContact extends Model
{
    use HasFactory;

    protected $table = 'emergency_contact';

    protected $primaryKey = 'emergency_contact_id';

    protected $fillable = [
        'user_id',
        'contact_name',
        'phone_number',
        'relationship'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
