<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Pets</title>
</head>

<body>
    <h1>My Pets</h1>
    <section>
        <ul>
            @foreach($pets as $pet)
                <li>{{$pet->toString()}}</li>
            @endforeach
        </ul>
    </section>

</body>

</html>
