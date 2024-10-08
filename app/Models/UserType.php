<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\User;
use App\Models\UserUserType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserType extends Model
{
    use HasFactory;

    protected $table = 'user_type';

    protected $primaryKey = 'user_type_id';

    protected $fillable = [
        'type_name'
    ];
    public function userUserTypes()
    {
        return $this->belongsToMany(User::class, 'user_user_type', 'user_type_id', 'user_id');
    }
}
