@extends('layouts.app-academia')

@section('title', 'Detalhes da Modalidade')

@section('content')

<h1>📖 Detalhes da Modalidade</h1>

<div class="card">
    <p style="font-size:24px; margin-bottom:15px;">
        <strong>Modalidade:</strong> {{ $disciplina->nome }}
    </p>

    <p style="font-size:24px; margin-bottom:30px;">
        <strong>Duração:</strong> {{ $disciplina->duracao }} horas
    </p>

    <a href="{{ route('disciplinas.edit', $disciplina->id) }}" class="btn editar">
        Editar
    </a>

    <a href="{{ route('disciplinas.index') }}" class="btn voltar">
        Voltar
    </a>
</div>

<div class="links">
    <a href="/">🏠 Menu Principal</a>
</div>

@endsection