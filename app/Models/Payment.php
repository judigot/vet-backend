<?php
/* Owner: App Scaffolder */

namespace App\Models;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';

    protected $primaryKey = 'payment_id';

    protected $fillable = [
        'appointment_id',
        'payment_date',
        'payment_method',
        'payment_status',
        'user_id',
        'amount'
    ];
    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
