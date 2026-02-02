<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Course;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admissions = Admission::all();
        return view('admission.list', compact('admissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        return view("admission.create", compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;

        $request->validate([
            "name" => "required|max:55",
            "email" => "required|email|unique:admissions",
            "phone" => "required|digits:10",
            "course" => "required|exists:courses,id",
        ]);

        $admission = new Admission();
        $admission->name = $request->name;
        $admission->email = $request->email;
        $admission->phone = $request->phone;
        $admission->course_id = $request->course;
        $admission->save();
        toast("Admission saved successfully!", "success");
        return redirect()->route('admission.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admission = Admission::find($id);
        $courses = Course::all();
        return view('admission.edit', compact("admission", "courses"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|max:55",
            "email" => "required|email|unique:admissions,email,$id",
            "phone" => "required|digits:10",
            "course" => "required|exists:courses,id",
        ]);
        $admission = Admission::find($id);
        $admission->name = $request->name;
        $admission->email = $request->email;
        $admission->phone = $request->phone;
        $admission->course_id = $request->course;
        $admission->save();
        toast("Admission updated successfully!", "success");
        return redirect()->route('admission.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admission = Admission::find($id);
        $admission->delete();
        toast("Admission deleted successfully!", "success");
        return redirect()->route('admission.index');
    }
}
