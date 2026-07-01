@extends('layouts.app-academia')

@section('title', 'Editar Inscrição')

@section('content')

<h1>✏️ Editar Inscrição</h1>

<div class="card">

<form action="{{ route('matricula.update',$matricula->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Aluno:</label>

    <select name="aluno_id">

        @foreach($alunos as $aluno)

            <option value="{{ $aluno->id }}"
                {{ $matricula->aluno_id == $aluno->id ? 'selected' : '' }}>

                {{ $aluno->nome }}

            </option>

        @endforeach

    </select>

    <label>Modalidade:</label>

    <select name="disciplina_id">

        @foreach($disciplinas as $disciplina)

            <option value="{{ $disciplina->id }}"
                {{ $matricula->disciplina_id == $disciplina->id ? 'selected' : '' }}>

                {{ $disciplina->nome }}

            </option>

        @endforeach

    </select>

    <button class="btn novo">
        Atualizar
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