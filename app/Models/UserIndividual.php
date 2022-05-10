<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserIndividual extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'birthdate',
        'birthdate',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
