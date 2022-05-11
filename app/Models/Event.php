<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'from_time',
        'to_time',
        'location',
        'shrt_description',
        'content',
        'cover_image',
        'attendees',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
