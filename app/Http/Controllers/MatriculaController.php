<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Disciplina;
use App\Http\Requests\MatriculaRequest;

class MatriculaController extends Controller
{
    public function index()
    {
        $data = Matricula::with(['aluno', 'disciplina'])->get();
        return view('matricula.index', compact('data'));
    }

    public function create()
    {
        $alunos = Aluno::orderBy('nome')->get();
        $disciplinas = Disciplina::orderBy('nome')->get();

        return view('matricula.create', compact('alunos', 'disciplinas'));
    }

    public function store(MatriculaRequest $request)
    {
        Matricula::create($request->validated());
        return redirect()->route('matricula.index');
    }

    public function show(string $id)
    {
        $matricula = Matricula::with(['aluno', 'disciplina'])->find($id);

        if ($matricula) {
            return view('matricula.show', compact('matricula'));
        }

        return '<h1>Matrícula não encontrada!</h1>';
    }

    public function edit(string $id)
    {
        $matricula = Matricula::find($id);
        $alunos = Aluno::orderBy('nome')->get();
        $disciplinas = Disciplina::orderBy('nome')->get();

        if ($matricula) {
            return view('matricula.edit', compact('matricula', 'alunos', 'disciplinas'));
        }

        return '<h1>Matrícula não encontrada!</h1>';
    }

    public function update(MatriculaRequest $request, string $id)
    {
        $matricula = Matricula::find($id);

        if ($matricula) {
            $matricula->update($request->validated());
            return redirect()->route('matricula.index');
        }

        return '<h1>Matrícula não encontrada!</h1>';
    }

    public function destroy(string $id)
    {
        $matricula = Matricula::find($id);

        if ($matricula) {
            $matricula->delete();
            return redirect()->route('matricula.index');
        }

        return '<h1>Matrícula não encontrada!</h1>';
    }
}