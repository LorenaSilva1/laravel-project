@extends('layouts.app-academia')

@section('title', 'Lista de Inscrições')

@section('content')

<h1>📝 Lista de Inscrições</h1>

<a href="{{ route('matricula.create') }}" class="btn novo">
    + Nova Inscrição
</a>

<div class="card">

    <table>

        <thead>
            <tr>
                <th>Aluno</th>
                <th>Modalidade</th>
                <th width="280">Ações</th>
            </tr>
        </thead>

        <tbody>

        @foreach($data as $matricula)

            <tr>

                <td>{{ $matricula->aluno->nome }}</td>

                <td>{{ $matricula->disciplina->nome }}</td>

                <td>

                    <a href="{{ route('matricula.show',$matricula->id) }}" class="btn ver">
                        Ver
                    </a>

                    <a href="{{ route('matricula.edit',$matricula->id) }}" class="btn editar">
                        Editar
                    </a>

                    <form
                        action="{{ route('matricula.destroy',$matricula->id) }}"
                        method="POST"
                        style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button class="btn excluir">
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

    <a href="{{ route('disciplinas.index') }}">
        💪 Gerenciar Modalidades
    </a>

    <a href="/">
        🏠 Menu Principal
    </a>

</div>

@endsection