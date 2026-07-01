<?php

namespace App\Http\Controllers;

use App\Models\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $data = Disciplina::all();

        return view('disciplina.index', compact('data'));
    }

    public function create()
    {
        return view('disciplina.create');
    }

    public function store(Request $request)
    {
        Disciplina::create($request->all());

        return redirect()->route('disciplinas.index');
    }

    public function show(string $id)
    {
        $disciplina = Disciplina::findOrFail($id);

        return view('disciplina.show', compact('disciplina'));
    }

    public function edit(string $id)
    {
        $disciplina = Disciplina::findOrFail($id);

        return view('disciplina.edit', compact('disciplina'));
    }

    public function update(Request $request, string $id)
    {
        $disciplina = Disciplina::findOrFail($id);

        $disciplina->update($request->all());

        return redirect()->route('disciplinas.index');
    }

    public function destroy(string $id)
    {
        $disciplina = Disciplina::findOrFail($id);

        $disciplina->delete();

        return redirect()->route('disciplinas.index');
    }
}