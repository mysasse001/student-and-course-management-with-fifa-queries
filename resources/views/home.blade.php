@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h4 class="text-center">Student schedules</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Student</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($students as $student)
                @if($student->studentcourse->count())
                <tr>
                <td>{{ $student->name }}</td>
                <td><a href="{{ route('schedules',$student) }}" class="btn btn-primary">schedules</a></td>
            </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    </div>
@endsection
