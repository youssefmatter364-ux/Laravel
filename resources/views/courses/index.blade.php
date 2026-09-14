<!DOCTYPE html>
<html>
<head>
    <title>All Courses</title>
</head>
<body>

<h1>All Courses</h1>

@foreach ($courses as $course)

    <h2>{{ $course->name }}</h2>

    <p>Description: {{ $course->description }}</p>

    <p>Price: {{ $course->price }}</p>

    <a href="/courses/{{ $course->id }}">Show</a>

    <hr>

@endforeach

</body>
</html>