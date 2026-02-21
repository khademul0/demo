<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $table = 'players';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'dob',
        'gender',
        'address',
        'city',
        'country',
        'position',
        'jersey_number',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
