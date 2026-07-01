@extends('layouts.app-academia')

@section('title', 'Editar Aluno')

@section('content')

<h1>✏️ Editar Aluno</h1>

<div class="card">
    <form action="{{ route('aluno.update', $aluno->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="nome" value="{{ $aluno->nome }}" required>

        <label>Turma:</label>
        <input type="number" name="turma" value="{{ $aluno->turma }}" required>

        <label>Plano:</label>
        <select name="curso_id" required>
            @foreach($cursos as $curso)
                <option value="{{ $curso->id }}" {{ $aluno->curso_id == $curso->id ? 'selected' : '' }}>
                    {{ $curso->nome }}
                </option>
            @endforeach
        </select>

        <button class="btn novo" type="submit">
            Atualizar
        </button>

        <a href="{{ route('aluno.index') }}" class="btn voltar">
            Voltar
        </a>
    </form>
</div>

<div class="links">
    <a href="/">🏠 Menu Principal</a>
</div>

@endsection