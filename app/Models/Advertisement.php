<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'advertiser',
        'banner',
        'url',
        'start_date',
        'end_date',
        'price',
        'clicks',
        'status',
    ];
}
