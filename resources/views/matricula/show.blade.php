<!DOCTYPE html>
<html>
<head>
    <title>Detalhes da Inscrição</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-primary mb-4">📄 Detalhes da Inscrição</h1>

    <div class="card shadow">
        <div class="card-body">

            <h4>
                <strong>Aluno:</strong>
                {{ $matricula->aluno->nome }}
            </h4>

            <h4 class="mt-3">
                <strong>Modalidade:</strong>
                {{ $matricula->disciplina->nome }}
            </h4>

            <br>

            <a href="{{ route('matricula.edit',$matricula->id) }}" class="btn btn-warning">
                Editar
            </a>

            <a href="{{ route('matricula.index') }}" class="btn btn-secondary">
                Voltar
            </a>

        </div>
    </div>

    <br>

    <a href="/" class="btn btn-dark">
        🏠 Menu Principal
    </a>

</div>

</body>
</html>