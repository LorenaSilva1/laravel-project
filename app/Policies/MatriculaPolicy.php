<?php

namespace App\Policies;

use App\Models\Matricula;
use App\Models\User;

class MatriculaPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Matricula $matricula): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Matricula $matricula): bool
    {
        return true;
    }

    public function delete(User $user, Matricula $matricula): bool
    {
        return true;
    }
}