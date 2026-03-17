<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class LessonResource extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'resources';

    protected $fillable = [
        'lesson_id',
        'title',
    ];

    public function lesson(): BelongsTo
    {
        return $this->belongsTo(Lesson::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('file');
    }
}
