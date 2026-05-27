<h1>Disciplinas</h1>

<a href="{{ route('disciplinas.create') }}">
    Nova Disciplina
</a>

<hr>

@foreach($disciplinas as $d)

<p>
    {{ $d->nome }} -
    {{ $d->carga_horaria }} horas
</p>

<a href="{{ route('disciplinas.show', $d->id) }}">
    Ver
</a>

<a href="{{ route('disciplinas.edit', $d->id) }}">
    Editar
</a>

<form action="{{ route('disciplinas.destroy', $d->id) }}" method="POST">

    @csrf
    @method('DELETE')

    <button type="submit">
        Excluir
    </button>

</form>

<hr>

@endforeach