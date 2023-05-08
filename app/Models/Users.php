<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Users extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable,Notifiable;
    public $timestamps = false;

    protected $fillable = [
        'name',
        'DateOfBirth',
        'Phone',
        'email',
        'password',
    ];

    protected $casts = [
        'DateOfBirth' => 'datetime',
    ];
}
