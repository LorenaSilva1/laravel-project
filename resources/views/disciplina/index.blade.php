@extends('layouts.app-academia')

@section('title', 'Lista de Modalidades')

@section('content')

<h1>💪 Lista de Modalidades</h1>

<a href="{{ route('disciplinas.create') }}" class="btn novo">
    + Nova Modalidade
</a>

<div class="card">

    <table>
        <thead>
            <tr>
                <th>Modalidade</th>
                <th>Duração (meses)</th>
                <th width="280">Ações</th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $disciplina)
                <tr>
                    <td>{{ $disciplina->nome }}</td>
                    <td>{{ $disciplina->duracao }}</td>
                    <td>

                        <a href="{{ route('disciplinas.show', $disciplina->id) }}" class="btn ver">
                            Ver
                        </a>

                        <a href="{{ route('disciplinas.edit', $disciplina->id) }}" class="btn editar">
                            Editar
                        </a>

                        <form action="{{ route('disciplinas.destroy', $disciplina->id) }}"
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

    <a href="{{ route('aluno.index') }}">
        👤 Gerenciar Alunos
    </a>

    <a href="{{ route('matricula.index') }}">
        📝 Gerenciar Inscrições
    </a>

    <a href="/">
        🏠 Menu Principal
    </a>

</div>

@endsection