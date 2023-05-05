<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'FIO',
        'DateOfBirth',
        'Phone',
        'email',
        'password',
    ];

    protected $casts = [
        'DateOfBirth' => 'datetime',
    ];
}
