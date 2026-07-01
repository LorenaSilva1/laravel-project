@extends('layouts.app-academia')

@section('title', 'Nova Inscrição')

@section('content')

<h1>📝 Nova Inscrição</h1>

<div class="card">
    <form action="{{ route('matricula.store') }}" method="POST">
        @csrf

        <label>Aluno:</label>

        <select name="aluno_id" required>
            @foreach($alunos as $aluno)
                <option value="{{ $aluno->id }}">
                    {{ $aluno->nome }}
                </option>
            @endforeach
        </select>

        <label>Modalidade:</label>

        <select name="disciplina_id" required>
            @foreach($disciplinas as $disciplina)
                <option value="{{ $disciplina->id }}">
                    {{ $disciplina->nome }}
                </option>
            @endforeach
        </select>

        <button class="btn novo">
            Salvar
        </button>

        <a href="{{ route('matricula.index') }}" class="btn voltar">
            Voltar
        </a>

    </form>
</div>

<div class="links">
    <a href="/">🏠 Menu Principal</a>
</div>

@endsection