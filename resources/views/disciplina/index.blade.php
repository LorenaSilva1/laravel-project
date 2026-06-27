<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Modalidades</title>

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

    <h1 class="mb-4">💪 Lista de Modalidades</h1>

    <a href="{{ route('disciplinas.create') }}" class="btn btn-primary mb-4">
        + Nova Modalidade
    </a>

    <div class="card">
        <div class="card-body">

            <table class="table table-hover align-middle">

                <thead class="table-primary">
                    <tr>
                        <th>Modalidade</th>
                        <th>Duração</th>
                        <th width="250">Ações</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($disciplinas as $disciplina)

                    <tr>

                        <td>{{ $disciplina->nome }}</td>

                        <td>{{ $disciplina->carga_horaria }} horas</td>

                        <td>

                            <a href="{{ route('disciplinas.show',$disciplina->id) }}"
                               class="btn btn-info btn-sm">
                               Ver
                            </a>

                            <a href="{{ route('disciplinas.edit',$disciplina->id) }}"
                               class="btn btn-warning btn-sm">
                               Editar
                            </a>

                            <form action="{{ route('disciplinas.destroy',$disciplina->id) }}"
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

    <a href="/" class="btn btn-secondary">
        🏠 Menu Principal
    </a>

</div>

</body>
</html>