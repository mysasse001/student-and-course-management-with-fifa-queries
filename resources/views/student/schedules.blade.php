@extends('layouts.app')
@section('content')
<h4>{{ $student->name }} schedules</h4>
<table class="table">
    <thead>
        <tr>
            <th>Day</th>
            <th>Time</th>
            <th> Course ID</th>
            <th>Course Name</th>
        </tr>
    </thead>
    <tbody>
      @foreach ($student->studentcourse as $course)
      <tr>
        <td>{{ $course->day }}</td>
        <td>{{date('H',strtotime($course->start_time)) }}-{{date('H',strtotime($course->end_time)) }}</td>
        <td>{{ $course->identification }}</td>
        <td>{{ $course->name }}</td>
    </tr>
      @endforeach
    </tbody>
</table>
@endsection
