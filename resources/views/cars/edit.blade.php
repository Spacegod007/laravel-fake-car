@extends("layout.app")

@section("content")

    <form method="post" action="{{route("cars.update", $car->id)}}">
        <input type="hidden" name="_method" value="put">

        <label for="brand">Brand</label>
        <input id="brand" type="text" name="brand" placeholder="The brand of the car" value="{{$car->brand}}">

        <label for="type">Type</label>
        <input id="type" type="text" name="type" placeholder="The type of car" value="{{$car->type}}">

        {{csrf_field()}}

        <button type="submit">Save</button>
    </form>

@endsection
