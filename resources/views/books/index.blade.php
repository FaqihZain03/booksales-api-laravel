<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Books List</title>
</head>
<body>
    <h1>Books List</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Published Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author->name }}</td>
                <td>{{ $book->published_year }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
