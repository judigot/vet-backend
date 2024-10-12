<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Pet;
use App\Models\Photo;
use App\Models\Payment;
use App\Models\UserType;
use App\Models\EmergencyContact;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // For authentication

class User extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $table = 'user';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'phone_number',
        'password_hash',
        'last_name',
        'first_name',
        'email',
    ];

    /**
     * Hash the password whenever it is set.
     */
    public function setPasswordHashAttribute($value)
    {
        $this->attributes['password_hash'] = bcrypt($value);
    }

    /**
     * Override the method to return the password hash for authentication.
     */
    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    /**
     * Relationship with EmergencyContact model
     */
    public function emergencyContacts()
    {
        return $this->hasMany(EmergencyContact::class, 'user_id');
    }

    /**
     * Relationship with Payment model
     */
    public function payments()
    {
        return $this->hasMany(Payment::class, 'user_id');
    }

    /**
     * Relationship with Pet model
     */
    public function pets()
    {
        return $this->hasMany(Pet::class, 'user_id');
    }

    /**
     * Relationship with Photo model
     */
    public function photos()
    {
        return $this->hasMany(Photo::class, 'user_id');
    }

    /**
     * Relationship with UserType model via the user_user_type pivot table
     */
    public function userTypes()
    {
        return $this->belongsToMany(UserType::class, 'user_user_type', 'user_id', 'user_type_id');
    }

    /**
     * Check if the user has a particular role
     */
    public function hasRole($role)
    {
        return $this->userTypes()->where('type_name', $role)->exists();
    }
}
