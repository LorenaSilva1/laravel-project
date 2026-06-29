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
            min-height:100vh;
            background:linear-gradient(135deg,#0f172a,#1e3a8a);
            color:#fff;
        }

        /* TOPO */

        .topo{
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:25px 50px;
        }

        .logo{
            font-size:34px;
            font-weight:bold;
        }

        .usuario{
            display:flex;
            align-items:center;
            gap:15px;
        }

        .btn{
            padding:12px 22px;
            border:none;
            border-radius:10px;
            color:#fff;
            text-decoration:none;
            cursor:pointer;
            font-weight:bold;
            font-size:16px;
        }

        .login{
            background:#2563eb;
        }

        .register{
            background:#16a34a;
        }

        .logout{
            background:#dc2626;
        }

        /* CONTEÚDO */

        .container{
            width:900px;
            max-width:95%;
            margin:70px auto;
            background:rgba(255,255,255,.12);
            backdrop-filter:blur(12px);
            border-radius:25px;
            padding:60px;
            text-align:center;
            box-shadow:0 20px 40px rgba(0,0,0,.35);
        }

        h1{
            font-size:64px;
            margin-bottom:10px;
        }

        .subtitulo{
            font-size:25px;
            color:#dbeafe;
            margin-bottom:55px;
        }

        .menu{
            width:520px;
            max-width:100%;
            margin:auto;
        }

        .menu a{
            display:flex;
            align-items:center;
            justify-content:center;
            gap:15px;

            text-decoration:none;

            background:#ffffff;
            color:#0f172a;

            font-size:30px;
            font-weight:bold;

            padding:24px;

            border-radius:18px;

            margin-bottom:22px;

            transition:.25s;

            box-shadow:0 10px 25px rgba(0,0,0,.20);
        }

        .menu a:hover{
            transform:translateY(-5px);
            background:#e0e7ff;
        }

        @media(max-width:700px){

            .topo{
                padding:20px;
                flex-direction:column;
                gap:20px;
            }

            h1{
                font-size:44px;
            }

            .subtitulo{
                font-size:20px;
            }

            .menu a{
                font-size:22px;
                padding:18px;
            }

            .container{
                padding:35px 25px;
            }

        }

    </style>

</head>
<body>

<div class="topo">

    <div class="logo">
        🏋️ Academia Code
    </div>

    <div class="usuario">

        @auth

            <strong>👤 {{ Auth::user()->name }}</strong>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn logout">Sair</button>
            </form>

        @else

            <a class="btn login" href="{{ route('login') }}">
                Entrar
            </a>

            <a class="btn register" href="{{ route('register') }}">
                Cadastrar
            </a>

        @endauth

    </div>

</div>

<div class="container">

    <h1>🏋️ Academia Code</h1>

    <div class="subtitulo">
        Sistema de Gerenciamento de Academia
    </div>

    <div class="menu">

        <a href="{{ route('aluno.index') }}">
            👤 Gerenciar Alunos
        </a>

        <a href="{{ route('disciplinas.index') }}">
            💪 Gerenciar Modalidades
        </a>

        <a href="{{ route('matricula.index') }}">
            📝 Gerenciar Inscrições
        </a>

    </div>

</div>

</body>
</html>