<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Answer extends Model
{
    protected $fillable = [
        'question_id',
        'user_id',
        'parent_id',
        'content',
        'upvotes',
        'is_best',
    ];

    protected $casts = [
        'is_best' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Answer::class, 'parent_id');
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Answer::class, 'parent_id');
    }
}
