@extends("layout.app")

@section("content")

    <form method="post" action="{{route("cars.store")}}">
        <label for="brand">Brand</label>
        <input id="brand" type="text" name="brand" placeholder="The brand of the car">

        <label for="type">Type</label>
        <input id="type" type="text" name="type" placeholder="The type of car">

        {{csrf_field()}}

        <button type="submit">Save</button>
    </form>

@endsection
