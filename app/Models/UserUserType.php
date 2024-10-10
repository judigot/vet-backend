<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserUserType extends Model
{
    use HasFactory;

    protected $table = 'user_user_type';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id',
        'user_type_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function userType()
    {
        return $this->belongsTo(UserType::class, 'user_type_id');
    }
}
