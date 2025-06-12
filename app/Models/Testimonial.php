<?php

namespace App\Models;

use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'role',
        'rating',
        'comment',
        'posted_at',
        'thumbnail_id',
    ];

    protected $casts = [
        'posted_at' => 'datetime',
    ];

    public function thumbnail(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'thumbnail_id', 'id');
    }
}
