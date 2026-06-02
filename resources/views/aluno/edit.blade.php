
<!DOCTYPE html>
<html>
<head>
    <title>Editar Aluno</title>

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
        }

        .btn{
            background:#2563eb;
            color:white;
            padding:10px 15px;
            border:none;
            border-radius:8px;
            cursor:pointer;
        }

        .voltar{
            margin-top:20px;
            display:inline-block;
        }
    </style>
</head>
<body>

<h1>✏️ Editar Aluno</h1>

<div class="card">

<form action="{{ route('aluno.update', $aluno->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nome:</label>
    <input type="text" name="nome" value="{{ $aluno->nome }}">

    <label>Turma:</label>
    <input type="number" name="turma" value="{{ $aluno->turma }}">

    <label>Curso:</label>
    <select name="curso_id">
        @foreach($cursos as $curso)
            <option value="{{ $curso->id }}"
                {{ $aluno->curso_id == $curso->id ? 'selected' : '' }}>
                {{ $curso->nome }}
            </option>
        @endforeach
    </select>

    <button class="btn" type="submit">
        Atualizar
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

