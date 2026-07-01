@extends('layouts.app-academia')

@section('title', 'Detalhes do Aluno')

@section('content')

<h1>📖 Detalhes do Aluno</h1>

<div class="card">
    <p style="font-size:24px; margin-bottom:15px;">
        <strong>Nome:</strong> {{ $aluno->nome }}
    </p>

    <p style="font-size:24px; margin-bottom:15px;">
        <strong>Turma:</strong> {{ $aluno->turma }}
    </p>

    <p style="font-size:24px; margin-bottom:30px;">
        <strong>Plano:</strong> {{ $aluno->curso->nome }}
    </p>

    <a href="{{ route('aluno.edit', $aluno->id) }}" class="btn editar">
        Editar
    </a>

    <a href="{{ route('aluno.index') }}" class="btn voltar">
        Voltar
    </a>
</div>

<div class="links">
    <a href="/">🏠 Menu Principal</a>
</div>

@endsection