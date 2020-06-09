<?php

namespace App\Policies;

use App\Calendar;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CalendarPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any calendars.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the calendar.
     *
     * @param  \App\User  $user
     * @param  \App\Calendar  $calendar
     * @return mixed
     */
    public function view(User $user, Calendar $calendar)
    {
        //
    }

    /**
     * Determine whether the user can create calendars.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the calendar.
     *
     * @param  \App\User  $user
     * @param  \App\Calendar  $calendar
     * @return mixed
     */
    public function update(User $user)
    {
        return in_array($user->email, [
            'customdenlie@gmail.com',
        ]);
    }

    /**
     * Determine whether the user can delete the calendar.
     *
     * @param  \App\User  $user
     * @param  \App\Calendar  $calendar
     * @return mixed
     */
    public function delete(User $user, Calendar $calendar)
    {
        //
    }

    /**
     * Determine whether the user can restore the calendar.
     *
     * @param  \App\User  $user
     * @param  \App\Calendar  $calendar
     * @return mixed
     */
    public function restore(User $user, Calendar $calendar)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the calendar.
     *
     * @param  \App\User  $user
     * @param  \App\Calendar  $calendar
     * @return mixed
     */
    public function forceDelete(User $user, Calendar $calendar)
    {
        //
    }
}
