@extends('layouts.app-academia')

@section('title', 'Editar Modalidade')

@section('content')

<h1>✏️ Editar Modalidade</h1>

<div class="card">
    <form action="{{ route('disciplinas.update', $disciplina->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome da Modalidade:</label>
        <input type="text" name="nome" value="{{ $disciplina->nome }}">

        <label>Duração:</label>
        <input type="number" name="duracao" value="{{ $disciplina->duracao }}">

        <button type="submit" class="btn novo">
            Atualizar
        </button>

        <a href="{{ route('disciplinas.index') }}" class="btn voltar">
            Voltar
        </a>
    </form>
</div>

<div class="links">
    <a href="/">🏠 Menu Principal</a>
</div>

@endsection