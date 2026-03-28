<!DOCTYPE html>
<html>

<head>
    <title>Books List</title>
</head>

<body>
    <h1>Books List</h1>

    <a href="{{ route('books.create') }}">Add New Book</a>
    <br>
    <br>
    <br>
    <table border="1" cellpadding="5">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year Published</th>
            <th>Actions</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->year_published }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->id) }}">Edit</a>


                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
