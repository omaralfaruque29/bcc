<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allTeacher = Teacher::all();
        return view('all_teacher', ['allTeacher' => $allTeacher]);
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher_form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aTeacher = $request->all();
        Teacher::create($aTeacher);
        Session::put('add_teacher_message', 'New teacher added successfully');
        return view('teacher_form');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
