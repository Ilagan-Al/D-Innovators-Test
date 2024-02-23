<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        echo $students;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        echo "TEST";

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $course = $request->course;
        $age = $request->age;
        $section = $request->section;
       
        $student = new Student;
        $student-> firstname = $firstname;
        $student-> lastname = $lastname;
        $student-> course = $course;
        $student-> age = $age;
        $student-> section = $section;
        $student-> save();

        echo "Successfully added new student";

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}