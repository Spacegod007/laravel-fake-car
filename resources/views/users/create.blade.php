@extends("layout.app")

@section("content")

    <form method="post" action="{{route("users.store")}}">
        <label for="name">Name</label>
        <input id="name" type="text" name="name" placeholder="Name of the user">

        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="Email of the user">

        <label for="password">Password</label>
        <input id="password" type="password" name="password" placeholder="Password of the user">

        {{csrf_field()}}

        <input type="submit" value="Save">
    </form>

@endsection
