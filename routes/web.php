<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, "home"])->name("home");

Route::get("/about", [PageController::class, "about"])->name("about");

Route::get("/services", [PageController::class, "service"])->name("service");

Route::get("/contact", [PageController::class, "contact"])->name("contact");

// Course Routes
Route::get("/course/list", [CourseController::class, 'list'])->name("course_list");
Route::get("/course/create", [CourseController::class, "create"])->name("course_create");
Route::post("/course/store", [CourseController::class, "store"])->name("course_store");
Route::get("/course/edit/{id}", [CourseController::class, "edit"])->name('course_edit');
Route::patch("/course/update/{id}", [CourseController::class, "update"])->name("course_update");
Route::delete("/course/delete/{id}", [CourseController::class, "delete"])->name('course_delete');


// Admission Route
Route::resource("/admission", AdmissionController::class)->names('admission');

// Get, Post let name = "sudam", $name = "sudam"
// HTTP Methods
// Get - read
// Post - create , save, store
// Put | Patch -update
// Delete - delete
