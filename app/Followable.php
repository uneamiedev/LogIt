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
     * Retreive following list
     */
    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }
}
