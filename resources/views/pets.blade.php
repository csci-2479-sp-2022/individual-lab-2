<!DOCTYPE html>
<html>
    <head>
        <title>Pets</title>
    </head>
    <body>
    @foreach($pets as $pet)
  <li>{{$pet->toString()}}</li>
    @endforeach
    </body>
</html>