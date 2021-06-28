<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Likable;

class Timeline extends Model
{
    use Likable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the logs for the timeline.
     */
    public function logs()
    {
        return $this->hasMany(Log::class);
    }

    /**
     * Generate URL friendly slug from timeline's title
     */
    protected static function boot() {
        parent::boot();

        static::creating(function($timeline) {
            $timeline->slug = Str::of($timeline->title)->slug('-');
        });
    }

    /**
     * Customize default key name to use slug instead of id
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
