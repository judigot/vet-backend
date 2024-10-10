<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\EmergencyContact;
use App\Models\Payment;
use App\Models\Pet;
use App\Models\Photo;
use App\Models\UserType;
use App\Models\UserUserType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'phone_number',
        'password_hash',
        'last_name',
        'first_name',
        'email'
    ];
    public function emergencyContacts()
    {
        return $this->hasMany(EmergencyContact::class, 'user_id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'user_id');
    }

    public function pets()
    {
        return $this->hasMany(Pet::class, 'user_id');
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'user_id');
    }


    public function userUserTypes()
    {
        return $this->belongsToMany(UserType::class, 'user_user_type', 'user_id', 'user_type_id');
    }
}
