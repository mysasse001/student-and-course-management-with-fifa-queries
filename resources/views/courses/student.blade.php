@extends('layouts.app')
@section('content')
Add {{ $student->name }} to a course

<form action="{{ route('student.courses',$student) }}" method="POST">
@csrf
<div class="form-group">
  <label for="">courses</label>
  <select class="form-control"  name="course_id" id="">
    <option value="">--select course</option>
   @foreach ($courses as $course)
   <option value="{{ $course->id }}">{{ $course->name }}</option>
   @endforeach
  </select>
</div>
<button name="submit" class="btn btn-primary">Submit</button>
</form>
<h4>{{ $student->name }} courses</h4>
<table class="table">
    <thead>
        <tr>
            <th>Course ID</th>
            <th>Course Name</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($student->studentcourse as $course)
       <tr>
        <td>{{ $course->identification }}</td>
        <td>{{ $course->name }}</td>
    </tr>
       @endforeach
    </tbody>
</table>
@endsection
