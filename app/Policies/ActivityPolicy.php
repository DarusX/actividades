<?php

namespace App\Policies;

use App\User;
use App\Activity;
use Illuminate\Auth\Access\HandlesAuthorization;

class ActivityPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        if ($user->role == 'A') if ($user->role == 'A') return true;
    }

    /**
     * Determine whether the user can view the activity.
     *
     * @param  \App\User  $user
     * @param  \App\Activity  $activity
     * @return mixed
     */
    public function view(User $user, Activity $activity)
    {
        if ($user->role == 'A') return true;
    }

    /**
     * Determine whether the user can create activities.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->role == 'A') return true;
    }

    /**
     * Determine whether the user can update the activity.
     *
     * @param  \App\User  $user
     * @param  \App\Activity  $activity
     * @return mixed
     */
    public function update(User $user, Activity $activity)
    {
        if ($user->role == 'A') return true;
    }

    /**
     * Determine whether the user can delete the activity.
     *
     * @param  \App\User  $user
     * @param  \App\Activity  $activity
     * @return mixed
     */
    public function delete(User $user, Activity $activity)
    {
        if ($user->role == 'A') return true;
    }
}
