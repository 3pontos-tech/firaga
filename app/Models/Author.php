<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Webid\Druid\Facades\Druid;

class Author extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'slug',
        'user_id',
        'name',
        'description',
        'thumbnail_id',
        'linkedin_url',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function thumbnail(): BelongsTo
    {
        return $this->belongsTo(Druid::getModel('media'), 'thumbnail_id', 'id');
    }
}
