@extends("layout.app")

@section("content")

    <h1>User: {{$user->name}}</h1>

    <table>
        <tr>
            <td>Name</td>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$user->email}}</td>
        </tr>
    </table>

    <form method="get" action="{{route("users.edit", $user->id)}}">
        <input type="submit" value="Edit">
    </form>
    <form method="post" action="{{route("users.destroy", $user->id)}}">
        <input type="hidden" name="_method" value="DELETE">
        {{csrf_field()}}
        <input type="submit" value="Delete">
    </form>
    <form method="get" action="{{route("users.index")}}">
        <input type="submit" value="Back">
    </form>

    <h3>{{$user->name}}'s cars</h3>

    <form method="get" action="{{route("cars.create", $user->id)}}">
        <input type="submit" value="Add car">
    </form>

    <ul>
        @foreach($user->cars as $car)
            <li>
                <a href="{{route("cars.show", [$user->id, $car->id])}}">{{$car->brand}} {{$car->type}}</a>
            </li>
        @endforeach
    </ul>

@endsection
