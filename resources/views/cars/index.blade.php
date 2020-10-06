@extends("layout.app")

@section("content")

    <h1>Cars</h1>

    <ul>
    @foreach($cars as $car)
        <li>
            <a href="{{route("cars.show", [$userId, $car->id])}}">{{$car->brand}} {{$car->type}}</a>
        </li>
    @endforeach
    </ul>

    <br>

    <form method="get" action="{{route("cars.create", $userId)}}">
        <input type="submit" value="New car">
    </form>
@endsection
