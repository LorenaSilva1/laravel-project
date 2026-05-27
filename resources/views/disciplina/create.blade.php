<h1>Nova Disciplina</h1>

<form action="{{ route('disciplinas.store') }}" method="POST">

    @csrf

    <input type="text" name="nome" placeholder="Nome">

    <br><br>

    <input type="number" name="carga_horaria" placeholder="Carga Horária">

    <br><br>

    <button type="submit">
        Salvar
    </button>

</form>