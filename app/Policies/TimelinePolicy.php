<?php

namespace App\Policies;

use App\Timeline;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TimelinePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Timeline  $timeline
     * @return mixed
     */
    public function update(User $user, Timeline $timeline)
    {
        return $user->id === $timeline->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Timeline  $timeline
     * @return mixed
     */
    public function delete(User $user, Timeline $timeline)
    {
        return $user->id === $timeline->user_id;
    }
}
