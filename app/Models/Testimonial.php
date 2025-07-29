<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'role',
        'rating',
        'comment',
        'posted_at',
    ];

    protected $casts = [
        'posted_at' => 'datetime',
    ];
}
