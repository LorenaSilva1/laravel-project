<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Curso;
use App\Http\Requests\AlunoRequest;

class AlunoController extends Controller
{
    public function index()
    {
        $data = Aluno::with('curso')->orderBy('nome')->get();
        return view('aluno.index', compact('data'));
    }

    public function create()
    {
        $cursos = Curso::orderBy('nome')->get();
        return view('aluno.create', compact('cursos'));
    }

    public function store(AlunoRequest $request)
    {
        Aluno::create($request->validated());
        return redirect()->route('aluno.index');
    }

    public function show(string $id)
    {
        $aluno = Aluno::with('curso')->find($id);

        if ($aluno) {
            return view('aluno.show', compact('aluno'));
        }

        return '<h1>Aluno não encontrado!</h1>';
    }

    public function edit(string $id)
    {
        $aluno = Aluno::find($id);
        $cursos = Curso::orderBy('nome')->get();

        if ($aluno) {
            return view('aluno.edit', compact('aluno', 'cursos'));
        }

        return '<h1>Aluno não encontrado!</h1>';
    }

    public function update(AlunoRequest $request, string $id)
    {
        $aluno = Aluno::find($id);

        if ($aluno) {
            $aluno->update($request->validated());
            return redirect()->route('aluno.index');
        }

        return '<h1>Aluno não encontrado!</h1>';
    }

    public function destroy(string $id)
    {
        $aluno = Aluno::find($id);

        if ($aluno) {
            $aluno->delete();
            return redirect()->route('aluno.index');
        }

        return '<h1>Aluno não encontrado!</h1>';
    }
}