<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index(){
        return view('courses.index');
    }

    public function store(Request $request){
        $data=$request->validate([
            'name'=>[],
            'identification'=>[],
            'day'=>[],
            'start_time'=>[],
            'end_time'=>[],
            'capacity'=>[]
        ]);

        Course::create($data);
        return back();
    }

    public function destroy(Course $course){
        $course->delete();
        return back();
    }
}
