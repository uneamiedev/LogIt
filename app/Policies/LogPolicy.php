<?php

namespace App\Policies;

use App\Log;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LogPolicy
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
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Log  $log
     * @return mixed
     */
    public function delete(User $user, Log $log)
    {
        return $user->id === $log->user_id;
    }
}
