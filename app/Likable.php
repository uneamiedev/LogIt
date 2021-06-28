<?php

namespace App;

trait Likable
{
    /**
     * Like a given timeline
     *
     * @param User
     * @return Response
     */
    public function likeBy(User $user)
    {
        return $user->likes()->withTimestamps()->save($this);
    }

    /**
     * Unlike a given timeline
     *
     * @param User
     * @return Response
     */
    public function unlikeBy(User $user)
    {
        return $user->likes()->detach($this);
    }

    /**
     * Follow or unfollow given user depending on the case
     *
     * @param User
     */
    public function toggleLike(User $user)
    {
        return $user->likes()->withTimestamps()->toggle($this);
    }

    /**
     * Unlike a given timeline
     *
     * @param User
     * @return bool
     */
    public function isLiked(User $user)
    {
        return (bool) $user->likes()
        ->where('timeline_id', $this->id)
        ->exists();
    }

    /**
     * Retreive list of people who like the timeline
     */
    public function liking()
    {
        return $this->belongsToMany(Timeline::class, 'likes', 'timeline_id', 'user_id');
    }
}
