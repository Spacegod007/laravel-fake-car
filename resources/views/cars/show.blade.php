@extends("layout.app")

@section("content")

    <h1>Car</h1>

    <table>
        <tr>
            <td>Brand</td>
            <td>{{$car->brand}}</td>
        </tr>
        <tr>
            <td>Type</td>
            <td>{{$car->type}}</td>
        </tr>
    </table>

    <br>
    <form method="get" action="{{route("cars.edit", [$userId, $car->id])}}">
        <input type="submit" value="Edit">
    </form>
    <form method="post" action="{{route("cars.destroy", [$userId, $car->id])}}">
        <input type="hidden" name="_method" value="DELETE">
        {{csrf_field()}}
        <input type="submit" value="Delete">
    </form>
    <form method="get" action="{{route("users.show", $userId)}}">
        <input type="submit" value="Back">
    </form>

@endsection
