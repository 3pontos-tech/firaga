<?php

namespace App\Models;

use App\Enums\ContactIntent;
use App\Enums\ContactPreference;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'ip_address',
        'message',
        'message_intent',
        'contact_preference',
    ];

    protected $casts = [
        'message_intent' => ContactIntent::class,
        'contact_preference' => ContactPreference::class,
    ];
}
