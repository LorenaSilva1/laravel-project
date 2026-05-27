<h1>Editar Disciplina</h1>

<form action="{{ route('disciplinas.update', $disciplina->id) }}" method="POST">

    @csrf
    @method('PUT')

    <input type="text" name="nome" value="{{ $disciplina->nome }}">

    <br><br>

    <input type="number" name="carga_horaria" value="{{ $disciplina->carga_horaria }}">

    <br><br>

    <button type="submit">
        Atualizar
    </button>

</form>