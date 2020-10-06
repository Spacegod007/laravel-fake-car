@extends("layout.app")

@section("content")

    <h1>Cars</h1>

    <lu>
    @foreach($cars as $car)
        <li>
            <a href="{{route("cars.show", $car->id)}}">{{$car->brand}} {{$car->type}}</a>
        </li>
    @endforeach
    </lu>

    <br>

    <form method="get" action="{{route("cars.create")}}">
        <input type="submit" value="New car">
    </form>
@endsection
