<?php

namespace App\Policies;

use App\Models\User;

class ProjectPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, $project): bool
    {
        // Hanya pemilik data atau admin yang boleh mengubah
        return $user->id === $project->user_id || $user->role === 'admin';
    }
}
