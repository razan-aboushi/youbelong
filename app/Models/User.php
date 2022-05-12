<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'profile',
        'address',
        'role_id',
        'approved',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function userCarehome()
    {
        return $this->hasOne(UserCarehome::class);
    }

    public function userIndividual()
    {
        return $this->hasOne(UserIndividual::class);
    }

    public function userCompany()
    {
        return $this->hasOne(UserCompany::class);
    }

    public function userEvents()
    {
        return $this->hasMany(UserEvent::class);
    }
}
