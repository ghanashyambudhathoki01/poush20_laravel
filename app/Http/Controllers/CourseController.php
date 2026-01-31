<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list()
    {
        $courses = Course::all();
        return view("course.list", compact('courses'));
    }

    public function create()
    {
        return view("course.create");
    }


    public function store(Request $request)
    {
        // return $request;
        $course = new Course();
        $course->name = $request->name;
        $course->price = $request->price;
        $course->duration = $request->duration;
        $course->description = $request->description;
        $course->save();
        toast("Course created successfully!", "success");
        return redirect()->route('course_create');
    }


    public function edit($id)
    {
        // return "course " . $id;
        $course = Course::find($id);
        return view("course.edit", compact('course'));
    }

    public function update(Request $request, $id)
    {
        // return $request;
        $course = Course::find($id);
        $course->name = $request->name;
        $course->price = $request->price;
        $course->duration = $request->duration;
        $course->description = $request->description;
        $course->save();
        toast("Course Update successfully!", "success");
        return redirect()->route("course_list");
    }

    public function delete($id)
    {
        // return "course " . $id;
        $course = Course::find($id);
        $course->delete();
        toast("Course Deleted successfully!", "success");
        return redirect()->back();
    }
}
