<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Voyage;

class VoyagePolicy
{
    /**
     * Determine if the user can view the voyage.
     */
    public function view(User $user, Voyage $voyage): bool
    {
        return $voyage->en_ligne || $user->id === $voyage->user_id || $user->role === 'admin';
    }

    /**
     * Determine if the user can create a voyage.
     */
    public function create(User $user): bool
    {
        return $user->role === 'admin' || $user->role === 'user';
    }

    /**
     * Determine if the user can update the voyage.
     */
    public function update(User $user, Voyage $voyage): bool
    {
        return $user->id === $voyage->user_id || $user->role === 'admin';
    }

    /**
     * Determine if the user can delete the voyage.
     */
    public function delete(User $user, Voyage $voyage): bool
    {
        return $user->id === $voyage->user_id || $user->role === 'admin';
    }
}
