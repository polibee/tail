<?php

namespace App\Policies;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    use HandlesAuthorization;
    public function update(User $currentUser,User $user)
    {
        return $currentUser === $user->id;
    }
    public function __construct()
    {
        //
    }
}
