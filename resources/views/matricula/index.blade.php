<!DOCTYPE html>
<html>
<head>
    <title>Inscrições</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-primary mb-4">📝 Lista de Inscrições</h1>

    <a href="{{ route('matricula.create') }}" class="btn btn-primary mb-3">
        + Nova Inscrição
    </a>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Aluno</th>
                        <th>Modalidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $matricula)
                    <tr>
                        <td>{{ $matricula->aluno->nome }}</td>
                        <td>{{ $matricula->disciplina->nome }}</td>
                        <td>
                            <a href="{{ route('matricula.show', $matricula->id) }}" class="btn btn-info btn-sm">Ver</a>

                            <a href="{{ route('matricula.edit', $matricula->id) }}" class="btn btn-warning btn-sm">Editar</a>

                            <form action="{{ route('matricula.destroy', $matricula->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <a href="{{ route('aluno.index') }}" class="btn btn-link mt-3">
        👤 Gerenciar Alunos
    </a>

    <br>

    <a href="/" class="btn btn-link">
        🏠 Menu Principal
    </a>

</div>

</body>
</html>