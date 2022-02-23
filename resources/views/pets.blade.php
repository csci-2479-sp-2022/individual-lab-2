@foreach($pets as $pet)
  <li>{{$pet->toString()}}</li>
@endforeach
