<!DOCTYPE html>
<html>
<head>
    <title>All Users</title>
</head>

<body>

    <h1>All Users</h1>

    @foreach ($users as $user)

        <h2>{{ $user->name }}</h2>

        <p>Email: {{ $user->email }}</p>

        <a href="/users/{{ $user->id }}">Show</a>

        <hr>

    @endforeach

</body>
</html>