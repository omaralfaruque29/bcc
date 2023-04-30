<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allStudent = Student::all();
        return view('all_student', ['allStudent' => $allStudent]);
    }

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'admin_email'=>'required',
        //     'admin_password'=>'required'
        // ]); 
        $aStudent = $request->all();
        Student::create($aStudent);
        //return "student added successfully";
        Session::put('add_student_message','new student added successfully');
        //return redirect('/add-student-page');
        return view('student_form');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
