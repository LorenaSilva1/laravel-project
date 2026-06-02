<!DOCTYPE html>
<html>
<head>
    <title>Detalhes da Matrícula</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-primary mb-4">
        📖 Detalhes da Matrícula
    </h1>

    <div class="card shadow">
        <div class="card-body">

            <h4 class="mb-3">
                <strong>Aluno:</strong>
                {{ $matricula->aluno->nome }}
            </h4>

            <h4 class="mb-4">
                <strong>Disciplina:</strong>
                {{ $matricula->disciplina->nome }}
            </h4>

            <a href="{{ route('matricula.edit', $matricula->id) }}"
               class="btn btn-warning">
               Editar
            </a>

            <a href="{{ route('matricula.index') }}"
               class="btn btn-secondary">
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