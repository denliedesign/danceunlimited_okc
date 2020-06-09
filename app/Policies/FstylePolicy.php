<?php

namespace App\Policies;

use App\Fstyle;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FstylePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any fstyles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the fstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Fstyle  $fstyle
     * @return mixed
     */
    public function view(User $user, Fstyle $fstyle)
    {
        //
    }

    /**
     * Determine whether the user can create fstyles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the fstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Fstyle  $fstyle
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the fstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Fstyle  $fstyle
     * @return mixed
     */
    public function delete(User $user, Fstyle $fstyle)
    {
        //
    }

    /**
     * Determine whether the user can restore the fstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Fstyle  $fstyle
     * @return mixed
     */
    public function restore(User $user, Fstyle $fstyle)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the fstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Fstyle  $fstyle
     * @return mixed
     */
    public function forceDelete(User $user, Fstyle $fstyle)
    {
        //
    }
}
