<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Code</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f3f4f6;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .container{
            text-align:center;
        }

        h1{
            font-size:56px;
            color:#111827;
            margin-bottom:15px;
        }

        p{
            font-size:22px;
            color:#555;
            margin-bottom:40px;
        }

        .menu{
            width:360px;
            margin:auto;
        }

        .botao{
            display:block;
            width:100%;
            background:#111827;
            color:white;
            text-decoration:none;
            padding:18px;
            margin-bottom:18px;
            border-radius:12px;
            font-size:24px;
            transition:.3s;
        }

        .botao:hover{
            background:#2563eb;
            transform:scale(1.03);
        }
    </style>

</head>

<body>

<div class="container">

    <h1>🏋️ Academia Code</h1>

    <p>Sistema de Gerenciamento de Academia</p>

    <div class="menu">

        <a class="botao" href="/aluno">
            👤 Alunos
        </a>

        <a class="botao" href="/disciplinas">
            💪 Modalidades
        </a>

        <a class="botao" href="/matricula">
            📝 Inscrições
        </a>

    </div>

</div>

</body>
</html>