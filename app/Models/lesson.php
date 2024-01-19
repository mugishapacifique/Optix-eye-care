<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Lesson extends Model
{
    protected $fillable = [
        'title', 'instructor', 'price', 'image_url', 'documents', 'video_url', 'description',
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}