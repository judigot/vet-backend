<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photo';

    protected $primaryKey = 'photo_id';

    protected $fillable = [
        'pet_id',
        'user_id',
        'image_url',
        'caption'
    ];
    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
