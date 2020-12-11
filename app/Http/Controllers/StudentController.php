<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(){
        return view('student.index');
    }

    public function store(Request $request){
        $data=$request->validate([
            'name'=>[],
            'identification'=>[]
        ]);

        auth()->user()->student()->create($data);
        return back();
    }

    public function edit(Student $student){
        return view('student.edit',compact('student'));
    }

    public function update(Request $request,Student $student){
        $data=$request->validate([
            'name'=>[],
            'identification'=>[]
        ]);
        $student->update($data);
        return redirect()->route('student.index');
    }

    public function destroy(Student $student){
        $student->delete();
        return back();
    }

    public function addStudentCourses(Student $student){
        return view('courses.student',compact('student'));
    }

    //student course
    public function studentcourse(Request $request,Student $student){
        $data=$request->validate([
            'course_id'=>[]
        ]);
        $student->studentcourse()->syncWithoutDetaching($request->input('course_id',[]));
        return back();
    }

    public function schedules(Student $student){
        return view('student.schedules',compact('student'));
    }
}
