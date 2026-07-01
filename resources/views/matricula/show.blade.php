@extends('layouts.app-academia')

@section('title', 'Detalhes da Inscrição')

@section('content')

<h1>📋 Detalhes da Inscrição</h1>

<div class="card">

    <p style="font-size:24px;margin-bottom:15px;">
        <strong>Aluno:</strong>
        {{ $matricula->aluno->nome }}
    </p>

    <p style="font-size:24px;margin-bottom:30px;">
        <strong>Modalidade:</strong>
        {{ $matricula->disciplina->nome }}
    </p>

    <a href="{{ route('matricula.edit',$matricula->id) }}" class="btn editar">
        Editar
    </a>

    <a href="{{ route('matricula.index') }}" class="btn voltar">
        Voltar
    </a>

</div>

<div class="links">
    <a href="/">🏠 Menu Principal</a>
</div>

@endsection