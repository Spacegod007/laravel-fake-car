@extends("layout.app")

@section("content")

    <h1>Users</h1>

    <form method="get" action="{{route("users.create")}}">
        <input type="submit" value="Create">
    </form>

    <ul>
        @foreach($users as $user)
            <li>
                <a href="{{route("users.show", $user->id)}}">{{$user->name}}</a>
            </li>
        @endforeach
    </ul>

@endsection
