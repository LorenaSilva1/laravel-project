@extends('layouts.app-academia')

@section('title', 'Lista de Alunos')

@section('content')

<h1>👤 Lista de Alunos</h1>

<a href="{{ route('aluno.create') }}" class="btn novo">
    + Novo Aluno
</a>

<div class="card">

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Turma</th>
                <th>Plano</th>
                <th width="280">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $aluno)
                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->turma }}</td>
                    <td>{{ $aluno->curso->nome }}</td>
                    <td>
                        <a href="{{ route('aluno.show', $aluno->id) }}" class="btn ver">
                            Ver
                        </a>

                        <a href="{{ route('aluno.edit', $aluno->id) }}" class="btn editar">
                            Editar
                        </a>

                        <form action="{{ route('aluno.destroy', $aluno->id) }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button class="btn excluir" type="submit">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

<div class="links">
    <a href="{{ route('matricula.index') }}">📝 Gerenciar Inscrições</a>
    <a href="/">🏠 Menu Principal</a>
</div>

@endsection