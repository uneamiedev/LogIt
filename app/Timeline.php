<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{

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
}
