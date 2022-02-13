<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <section>
        <ol>
            <strong><h1 style="text-decoration: underline;">My list of pets:</h1></strong>

            @foreach($pets ?? '' as $pet)

                <li style="font-size:1.3rem;">{{$pet->toString()}}</li>

            <br>
            @endforeach
        </ol>
    </section>
    <a href="{{ url('/') }}" style="color:black"><b>&#8592; Go Back</b></a>



</body>

</html>
