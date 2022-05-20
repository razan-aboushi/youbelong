<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCarehome extends Model
{
    use HasFactory;

    public static $elderlies_range = [
        '1' => 'Less than 50',
        '2' => '51 - 100',
        '3' => '101 - 200',
        '4' => 'Above 200',
    ];

    protected $fillable = [
        'user_id',
        'elderlies_number',
        'establishment_date',
        'bio',
        'short_description',
        'city',
        'street',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
