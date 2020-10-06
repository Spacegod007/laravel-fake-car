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

@endsection
