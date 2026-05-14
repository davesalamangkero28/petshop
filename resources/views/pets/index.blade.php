<h1>Pets List</h1>
    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
<a href="{{ route('pets.create') }}">Add Pet</a>

<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Species</th>
        <th>Breed</th>
        <th>Age</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    @foreach($pets as $pet)
    <tr>
        <td>{{ $pet->id }}</td>
        <td>{{ $pet->species }}</td>
        <td>{{ $pet->breed }}</td>
        <td>{{ $pet->age }}</td>
        <td>{{ $pet->price }}</td>

        <td>
            <a href="{{ route('pets.edit', $pet->id) }}">
                Edit
            </a>

            <form action="{{ route('pets.destroy', $pet->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>