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
     * Retreive following list
     */
    public function follows()
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
