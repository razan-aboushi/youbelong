<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareHome extends Model
{
    use HasFactory;

    public static $elderlies_range = [
        '1' => 'Less than 50',
        '2' => '51 - 100',
        '3' => '101 - 200',
        '4' => 'Above 200',
    ];

    protected $fillable = [
        'elderlies_number',
        'establishment_date',
        'user_id',
        'bio'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
