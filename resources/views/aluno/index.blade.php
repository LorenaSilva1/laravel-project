<!DOCTYPE html>
<html>
<head>
    <title>Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-primary mb-4">📚 Lista de Alunos</h1>

    <a href="{{ route('aluno.create') }}" class="btn btn-primary mb-3">
        + Novo Aluno
    </a>

    <div class="card shadow">
        <div class="card-body">

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Turma</th>
                        <th>Curso</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($data as $aluno)
                    <tr>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->turma }}</td>
                        <td>{{ $aluno->curso->nome }}</td>
                        <td>
                            <a href="{{ route('aluno.show', $aluno->id) }}" class="btn btn-info btn-sm">
                                Ver
                            </a>

                            <a href="{{ route('aluno.edit', $aluno->id) }}" class="btn btn-warning btn-sm">
                                Editar
                            </a>

                            <form action="{{ route('aluno.destroy', $aluno->id) }}"
                                  method="POST"
                                  style="display:inline">
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

    <a href="{{ route('matricula.index') }}" class="btn btn-link mt-3">
        🎓 Gerenciar Matrículas
    </a>

    <br>

    <a href="/" class="btn btn-link">
        🏠 Menu Principal
    </a>

</div>

</body>
</html>