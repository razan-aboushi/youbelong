<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'status',
    ];

    public function paymentAccounts()
    {
        return $this->hasMany(PaymentAccount::class);
    }
}
