<h1>Edit Pet</h1>

<form action="{{ route('pets.update', $pet->id) }}" method="POST">

    @csrf
    @method('PUT')

    <input type="text" name="species" value="{{ $pet->species }}">
    <br><br>

    <input type="text" name="breed" value="{{ $pet->breed }}">
    <br><br>

    <input type="number" name="age" value="{{ $pet->age }}">
    <br><br>

    <input type="number" step="0.01" name="price" value="{{ $pet->price }}">
    <br><br>

    <button type="submit">
        Update
    </button>

</form>