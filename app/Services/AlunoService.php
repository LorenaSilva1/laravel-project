<?php

namespace App\Services;

use App\Models\Aluno;
use App\Repositories\AlunoRepository;

class AlunoService
{
    protected $repository;

    public function __construct(AlunoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listar()
    {
        return $this->repository->all();
    }

    public function buscar($id)
    {
        return $this->repository->find($id);
    }

    public function salvar(array $dados)
    {
        return $this->repository->create($dados);
    }

    public function atualizar(Aluno $aluno, array $dados)
    {
        return $this->repository->update($aluno, $dados);
    }

    public function excluir(Aluno $aluno)
    {
        return $this->repository->delete($aluno);
    }
}