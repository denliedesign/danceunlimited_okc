<?php

namespace App\Policies;

use App\Sstyle;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SstylePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any sstyles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the sstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Sstyle  $sstyle
     * @return mixed
     */
    public function view(User $user, Sstyle $sstyle)
    {
        //
    }

    /**
     * Determine whether the user can create sstyles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the sstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Sstyle  $sstyle
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the sstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Sstyle  $sstyle
     * @return mixed
     */
    public function delete(User $user, Sstyle $sstyle)
    {
        //
    }

    /**
     * Determine whether the user can restore the sstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Sstyle  $sstyle
     * @return mixed
     */
    public function restore(User $user, Sstyle $sstyle)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the sstyle.
     *
     * @param  \App\User  $user
     * @param  \App\Sstyle  $sstyle
     * @return mixed
     */
    public function forceDelete(User $user, Sstyle $sstyle)
    {
        //
    }
}
