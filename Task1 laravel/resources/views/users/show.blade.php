<!DOCTYPE html>
<html>
<head>
    <title>Course Details</title>
</head>
<body>

<h1>Course Details</h1>

<p>ID: {{ $course->id }}</p>

<p>Name: {{ $course->name }}</p>

<p>Description: {{ $course->description }}</p>

<p>Price: {{ $course->price }}</p>

<a href="/courses">Back to Courses</a>

</body>
</html>