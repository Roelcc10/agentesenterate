<?php

namespace App\Policies;

use App\Agent;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AgentPolicy
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

    public function pass(User $user, Agent $agent)
    {
        return $user->id == $agent->user_id;
    }
}
