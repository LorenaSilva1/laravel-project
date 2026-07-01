@extends('layouts.app-academia')

@section('title', 'Novo Aluno')

@section('content')

<h1>👤 Novo Aluno</h1>

<div class="card">
    <form action="{{ route('aluno.store') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Turma:</label>
        <input type="number" name="turma" required>

        <label>Plano:</label>
        <select name="curso_id" required>
            @foreach($cursos as $curso)
                <option value="{{ $curso->id }}">
                    {{ $curso->nome }}
                </option>
            @endforeach
        </select>

        <button class="btn novo" type="submit">
            Salvar
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