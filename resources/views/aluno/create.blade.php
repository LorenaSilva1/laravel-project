<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Novo Aluno</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f5f5f5;
            padding:30px;
        }

        h1{
            color:#1e3a8a;
        }

        .card{
            background:white;
            padding:25px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
            max-width:500px;
        }

        label{
            font-weight:bold;
        }

        input, select{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
            border:1px solid #ccc;
            border-radius:6px;
            box-sizing:border-box;
        }

        .btn{
            background:#2563eb;
            color:white;
            padding:10px 15px;
            border:none;
            border-radius:8px;
            cursor:pointer;
        }

        .btn:hover{
            background:#1d4ed8;
        }

        .voltar{
            margin-top:20px;
            display:inline-block;
            text-decoration:none;
            color:#2563eb;
            font-weight:bold;
        }

        .voltar:hover{
            text-decoration:underline;
        }
    </style>
</head>

<body>

<h1>👤 Novo Aluno</h1>

<div class="card">

<form action="{{ route('aluno.store') }}" method="POST">
    @csrf

    <label>Nome:</label>
    <input type="text" name="nome" required>

    <label>Turma:</label>
    <input type="number" name="turma" required>

    <label>Plano:</label>
    <select name="curso_id">
        @foreach($cursos as $curso)
            <option value="{{ $curso->id }}">
                {{ $curso->nome }}
            </option>
        @endforeach
    </select>

    <button class="btn" type="submit">
        Salvar
    </button>

</form>

</div>

<a class="voltar" href="{{ route('aluno.index') }}">
    ⬅ Voltar para Alunos
</a>

<br><br>

<a class="voltar" href="/">
    🏠 Menu Principal
</a>

</body>
</html>