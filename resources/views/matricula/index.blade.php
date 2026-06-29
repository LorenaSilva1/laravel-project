<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Inscrições</title>

    <style>
        *{ margin:0; padding:0; box-sizing:border-box; font-family:Arial, sans-serif; }

        body{
            background:#f3f4f6;
            min-height:100vh;
        }

        .topo{
            background:linear-gradient(135deg,#0f172a,#1e3a8a);
            color:white;
            padding:22px 45px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .logo{
            font-size:24px;
            font-weight:bold;
        }

        .usuario{
            display:flex;
            gap:15px;
            align-items:center;
            font-weight:bold;
        }

        .logout{
            background:#dc2626;
            color:white;
            border:none;
            padding:10px 16px;
            border-radius:8px;
            cursor:pointer;
        }

        .container{
            width:85%;
            margin:45px auto;
        }

        h1{
            color:#1e3a8a;
            font-size:42px;
            margin-bottom:25px;
        }

        .btn{
            padding:10px 15px;
            border-radius:8px;
            text-decoration:none;
            color:white;
            border:none;
            cursor:pointer;
            font-size:15px;
        }

        .novo{ background:#2563eb; display:inline-block; margin-bottom:25px; }
        .ver{ background:#06b6d4; }
        .editar{ background:#f59e0b; }
        .excluir{ background:#dc2626; }

        .card{
            background:white;
            padding:25px;
            border-radius:16px;
            box-shadow:0 10px 25px rgba(0,0,0,.12);
        }

        table{
            width:100%;
            border-collapse:collapse;
            font-size:18px;
        }

        th{
            background:#1e3a8a;
            color:white;
            padding:14px;
            text-align:left;
        }

        td{
            padding:14px;
            border-bottom:1px solid #ddd;
        }

        tr:nth-child(even){
            background:#f1f5f9;
        }

        .links{
            margin-top:25px;
        }

        .links a{
            display:inline-block;
            margin-right:15px;
            color:#1e3a8a;
            font-weight:bold;
            text-decoration:none;
        }
    </style>
</head>

<body>

<div class="topo">
    <div class="logo">🏋️ Academia Code</div>

    <div class="usuario">
        <span>👤 {{ Auth::user()->name }}</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="logout" type="submit">Sair</button>
        </form>
    </div>
</div>

<div class="container">

    <h1>📝 Lista de Inscrições</h1>

    <a href="{{ route('matricula.create') }}" class="btn novo">
        + Nova Inscrição
    </a>

    <div class="card">
        <table>
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Modalidade</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $matricula)
                    <tr>
                        <td>{{ $matricula->aluno->nome }}</td>
                        <td>{{ $matricula->disciplina->nome }}</td>
                        <td>
                            <a href="{{ route('matricula.show', $matricula->id) }}" class="btn ver">Ver</a>
                            <a href="{{ route('matricula.edit', $matricula->id) }}" class="btn editar">Editar</a>

                            <form action="{{ route('matricula.destroy', $matricula->id) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn excluir">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="links">
        <a href="{{ route('aluno.index') }}">👤 Gerenciar Alunos</a>
        <a href="/">🏠 Menu Principal</a>
    </div>

</div>

</body>
</html>