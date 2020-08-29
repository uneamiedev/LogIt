<?php

namespace App;

trait Followable
{
    /**
     * Follow a given user
     *
     * @param User
     */
    public function follow(User $user)
    {
        return $this->follows()->save($user);
    }

    /**
     * Unfollow a given user
     *
     * @param User
     */
    public function unfollow(User $user)
    {
        return $this->follows()->detach($user);
    }

    /**
     * Follow or unfollow given user depending on the case
     *
     * @param User
     */
    public function toggleFollow(User $user)
    {
        if($this->isFollowing($user)) {
            return $this->unfollow($user);
        }

        return $this->follow($user);
    }

    /**
     * Retreive following list
     */
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    /**
     * Retreive followers' list
     */
    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    /**
     * Check if logged user is following given user
     */
    public function isFollowing(User $user)
    {
        return $this->follows()
            ->where('following_user_id', $user->id)
            ->exists();
    }
}
