<h1>Novo Artista</h1>

<form action="/artists" method="POST">

    @csrf

    <label>Nome</label>

    <input type="text" name="name">

    <button type="submit">
        Salvar
    </button>

</form>

<label>Artista</label>

<select name="artist_id">

    @foreach($artists as $artist)

        <option value="{{ $artist->id }}">
            {{ $artist->name }}
        </option>

    @endforeach

</select>