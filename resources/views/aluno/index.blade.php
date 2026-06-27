<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Alunos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f5f5f5;
        }

        h1{
            color:#1e40af;
            font-weight:bold;
        }

        .card{
            border:none;
            border-radius:15px;
            box-shadow:0 0 15px rgba(0,0,0,.1);
        }

        .btn{
            border-radius:8px;
        }
    </style>

</head>

<body>

<div class="container mt-5">

    <h1 class="mb-4">👤 Lista de Alunos</h1>

    <a href="{{ route('aluno.create') }}" class="btn btn-primary mb-4">
        + Novo Aluno
    </a>

    <div class="card">
        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead class="table-primary">
                    <tr>
                        <th>Nome</th>
                        <th>Turma</th>
                        <th>Plano</th>
                        <th width="250">Ações</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($data as $aluno)

                    <tr>

                        <td>{{ $aluno->nome }}</td>

                        <td>{{ $aluno->turma }}</td>

                        <td>{{ $aluno->curso->nome }}</td>

                        <td>

                            <a href="{{ route('aluno.show',$aluno->id) }}"
                               class="btn btn-info btn-sm">
                               Ver
                            </a>

                            <a href="{{ route('aluno.edit',$aluno->id) }}"
                               class="btn btn-warning btn-sm">
                               Editar
                            </a>

                            <form action="{{ route('aluno.destroy',$aluno->id) }}"
                                  method="POST"
                                  style="display:inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
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

    <br>

    <a href="{{ route('matricula.index') }}" class="btn btn-secondary">
        📝 Gerenciar Inscrições
    </a>

    <br><br>

    <a href="/" class="btn btn-dark">
        🏠 Menu Principal
    </a>

</div>

</body>
</html>