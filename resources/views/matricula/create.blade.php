<!DOCTYPE html>
<html>
<head>
    <title>Nova Matrícula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-primary mb-4">🎓 Nova Matrícula</h1>

    <div class="card shadow">
        <div class="card-body">

            <form action="{{ route('matricula.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Aluno:</label>
                    <select name="aluno_id" class="form-select">
                        @foreach($alunos as $aluno)
                            <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Disciplina:</label>
                    <select name="disciplina_id" class="form-select">
                        @foreach($disciplinas as $disciplina)
                            <option value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('matricula.index') }}" class="btn btn-secondary">Voltar</a>
            </form>

        </div>
    </div>

    <a href="/" class="btn btn-link mt-3">🏠 Menu Principal</a>

</div>

</body>
</html>