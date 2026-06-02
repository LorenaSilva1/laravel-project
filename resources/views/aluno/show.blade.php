<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Aluno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-primary mb-4">📖 Detalhes do Aluno</h1>

    <div class="card shadow">
        <div class="card-body">

            <h4><strong>Nome:</strong> {{ $aluno->nome }}</h4>
            <h4><strong>Turma:</strong> {{ $aluno->turma }}</h4>
            <h4><strong>Curso:</strong> {{ $aluno->curso->nome }}</h4>

            <br>

            <a href="{{ route('aluno.edit', $aluno->id) }}" class="btn btn-warning">
                Editar
            </a>

            <a href="{{ route('aluno.index') }}" class="btn btn-secondary">
                Voltar
            </a>

        </div>
    </div>

    <a href="/" class="btn btn-link mt-3">
        🏠 Menu Principal
    </a>

</div>

</body>
</html>