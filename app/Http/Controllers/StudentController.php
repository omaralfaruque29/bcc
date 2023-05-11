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
    public function edit($id)
    {
        $aStudent = Student::find($id);
        return view('edit_student_page', ['aStudent' => $aStudent]);

        // if(!is_null($aStudent)){
        //     return view('edit_student_page', ['aStudent' => $aStudent]);
        // } else {
        //     return view('all_student');
        // }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $aStudent = Student::find($id);
        if(!is_null($aStudent)){
        $aStudent->student_name = $request->student_name;
        $aStudent->student_email = $request->student_email;
        $aStudent->student_mobile = $request->student_mobile;
        $aStudent->student_course = $request->student_course;
        $aStudent->student_course_payment_status = $request->student_course_payment_status;
        $aStudent->update();
        Session::put('update student status','student updated successfully');
        return redirect('/all-student');
        } else{
            return "false";
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $aStudent = Student::find($id);
        $aStudent->delete();
        return redirect('/all-student');
    }


    public function showStudentsEnrolledC()
    {
        $allStudent = Student::all()->where('student_course', 'C');
        //$students = Student::select('student_name','student_email', 'student_course')->where('student_course', 'C')->get();
        return view('all_student', ['allStudent' => $allStudent]);

    }

    public function showStudentsEnrolledPython()
    {
        $allStudent = Student::all()->where('student_course', 'python');
        //$students = Student::select('student_name','student_email', 'student_course')->where('student_course', 'C')->get();
        return view('all_student', ['allStudent' => $allStudent]);

    }



    
}
