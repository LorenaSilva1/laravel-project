<?php

namespace App\Policies;

use App\Models\Disciplina;
use App\Models\User;

class DisciplinaPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Disciplina $disciplina): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Disciplina $disciplina): bool
    {
        return true;
    }

    public function delete(User $user, Disciplina $disciplina): bool
    {
        return true;
    }
}