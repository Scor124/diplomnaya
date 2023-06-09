<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'UserID',
        'Class'
    ];

    protected $casts = [
        'Studying_since' => 'datetime',
    ];
}
