<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Services\AlunoService;
use App\Http\Requests\AlunoRequest;

class AlunoController extends Controller
{
    protected $service;

    public function __construct(AlunoService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->listar();
        return view('aluno.index', compact('data'));
    }

    public function create()
    {
        $cursos = Curso::orderBy('nome')->get();
        return view('aluno.create', compact('cursos'));
    }

    public function store(AlunoRequest $request)
    {
        $this->service->salvar($request->validated());
        return redirect()->route('aluno.index');
    }

    public function show(string $id)
    {
        $aluno = $this->service->buscar($id);
        return view('aluno.show', compact('aluno'));
    }

    public function edit(string $id)
    {
        $aluno = $this->service->buscar($id);
        $cursos = Curso::orderBy('nome')->get();

        return view('aluno.edit', compact('aluno', 'cursos'));
    }

    public function update(AlunoRequest $request, string $id)
    {
        $aluno = $this->service->buscar($id);
        $this->service->atualizar($aluno, $request->validated());

        return redirect()->route('aluno.index');
    }

    public function destroy(string $id)
    {
        $aluno = $this->service->buscar($id);
        $this->service->excluir($aluno);

        return redirect()->route('aluno.index');
    }
}