<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function is_admin(User $user)
    {
        return $user->role->name == 'admin';
    }

    public function is_carehome(User $user)
    {
        return $user->role->name == 'carehome';
    }

    public function is_approved(User $user)
    {
        return $user->approved;
    }

    public function access_contacts_list(User $user)
    {
        return $this->is_admin($user) || $this->is_carehome($user);
    }
}
