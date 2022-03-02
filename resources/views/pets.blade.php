<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list of pets</title>
</head>
<body>

    <div><section>
    //Add the following code to display the list of pets, calling the toString() method

    @foreach($pets as $pet)
        <li>{{$pet->toString()}}</li>
    @endforeach

    </section>
    </div>

</body>
</html>

