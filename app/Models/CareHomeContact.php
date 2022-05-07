<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareHomeContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subject',
        'name',
        'email',
        'phone',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
