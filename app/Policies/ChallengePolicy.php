<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Submission;

class ChallengePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function manage(User $user)
{
    return $user->role === 'admin'; // Seulement les admins peuvent gérer
}

public function validate(User $user, Submission $submission)
{
    return $user->role === 'admin' || $user->role === 'moderator';
}



}
