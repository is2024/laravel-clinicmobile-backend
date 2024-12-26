<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'open_time',
        'close_time',
        'website',
        'note',
        'image',
        'spesialis',
    ];
}
