<?php

namespace App\Repositories;

use App\Models\Aluno;

class AlunoRepository
{
    public function all()
    {
        return Aluno::with('curso')->get();
    }

    public function find($id)
    {
        return Aluno::findOrFail($id);
    }

    public function create(array $dados)
    {
        return Aluno::create($dados);
    }

    public function update(Aluno $aluno, array $dados)
    {
        return $aluno->update($dados);
    }

    public function delete(Aluno $aluno)
    {
        if ($aluno->matriculas()->count() > 0) {
            return false;
        }

        return $aluno->delete();
    }
}