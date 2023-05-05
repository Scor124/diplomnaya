<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'UserID',
        'works_from',
        'AccessLevel',
    ];

    protected $casts = [
        'works_from' => 'datetime',
    ];
}
