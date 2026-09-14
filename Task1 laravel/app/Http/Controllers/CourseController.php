<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        $courses = \App\Models\Course::all();

        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = \App\Models\Course::find($id);

        return view('courses.show', compact('course'));
    }
}