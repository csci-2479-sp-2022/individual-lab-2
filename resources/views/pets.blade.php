<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pets</title>
</head>
<body>
    <h1>My Pets</h1>
    <ul>
    @foreach($pets as $pet)
        <li>{{$pet->toString()}}</li>
    @endforeach
    </ul>
</body>
</html>