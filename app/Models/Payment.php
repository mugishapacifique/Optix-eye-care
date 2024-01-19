<?php

// Payment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'lesson_id','payment_id', 'payer_id', 'payer_email', 'amount', 'currency', 'payment_status',
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
