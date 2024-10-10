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
        'contact_name',
        'phone_number',
        'relationship',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
