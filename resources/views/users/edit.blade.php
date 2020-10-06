@extends("layout.app")

@section("content")
    <form method="post" action="{{route("users.update", $user->id)}}">
        <input type="hidden" name="_method" value="PUT">

        <label for="name">Name</label>
        <input id="name" type="text" name="name" placeholder="Name of the user" value="{{$user->name}}">

        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="Email of the user" value="{{$user->email}}">

        {{csrf_field()}}

        <input type="submit" value="Save">
    </form>

    <form method="get" action="{{route("users.show", $user->id)}}">
        <input type="submit" value="Back">
    </form>
@endsection
