<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Individual Lab 2</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>
<body>
    <div>
    <h1>Pet list</h1>
    <ul>
    @foreach($pets as $pet)
        <li>{{$pet->toString()}}</li>
    @endforeach
    </ul>
    </div>
</body>
</html>