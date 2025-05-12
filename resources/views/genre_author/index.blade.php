<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre & Author List</title>
</head>
<body>
    <h1>Genre List</h1>
    <ul>
        @foreach($genres as $genre)
            <li>{{ $genre['name'] }}</li>
        @endforeach
    </ul>

    <h1>Author List</h1>
    <ul>
        @foreach($authors as $author)
            <li>{{ $author['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>
