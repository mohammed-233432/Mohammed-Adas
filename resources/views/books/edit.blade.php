<!DOCTYPE html>
<html>

<head>
    <title>Edit Book</title>
</head>

<body>
    <h1>Edit Book</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Title:</label>
        <input type="text" name="title" value="{{ $book->title }}" required><br><br>

        <label>Author:</label>
        <input type="text" name="author" value="{{ $book->author }}" required><br><br>

        <label>Year Published:</label>
        <input type="number" name="year_published" value="{{ $book->year_published }}" required><br><br>

        <button type="submit">Update</button>
    </form>
    
</body>

</html>
