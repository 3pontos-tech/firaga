<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'rating',
        'comment',
        'posted_at',
        'testimonial_url',
    ];
}
