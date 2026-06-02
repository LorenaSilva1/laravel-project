<!DOCTYPE html>
<html>
<head>
    <title>Nova Disciplina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-primary mb-4">📝 Nova Disciplina</h1>

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('disciplinas.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Carga Horária:</label>
                    <input type="number" name="carga_horaria" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>

                <a href="{{ route('disciplinas.index') }}" class="btn btn-secondary">
                    Voltar
                </a>
            </form>

        </div>
    </div>

    <a href="/" class="btn btn-link mt-3">
        🏠 Menu Principal
    </a>

</div>

</body>
</html>