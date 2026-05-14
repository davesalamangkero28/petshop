<h1>Add Pet</h1>

<form action="{{ route('pets.store') }}" method="POST">

    @csrf

    <input type="text" name="species" placeholder="Species">
    <br><br>

    <input type="text" name="breed" placeholder="Breed">
    <br><br>

    <input type="number" name="age" placeholder="Age">
    <br><br>

    <input type="number" step="0.01" name="price" placeholder="Price">
    <br><br>

    <button type="submit">
        Save
    </button>

</form>