<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserProfile extends Model
{
    protected $fillable = [
        'user_id',
        'timezone',
        'preferred_language',
        'headline',
        'bio',
        'website',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'youtube_url',
        'experience_level',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
