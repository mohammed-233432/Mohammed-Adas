<!DOCTYPE html>
<html>

<head>
    <title>Add Book</title>
</head>

<body>
    <h1>Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required><br><br>

        <label>Author:</label>
        <input type="text" name="author" required><br><br>

        <label>Year Published:</label>
        <input type="number" name="year_published" required><br><br>

        <button type="submit">Save</button>
    </form>
</body>

</html>
