@extends('layouts.app')
@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
  Add course
</button>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content" action="{{ route('courses.store') }}" method="POST">
            <div class="modal-header">
                <h5 class="modal-title">Add course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
              @csrf
              <div class="form-group">
                <label for="">Course ID</label>
                <input type="text" name="identification" id="" class="form-control" placeholder="course id" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="">Course Name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="course name" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="">Course Capacity</label>
                <input type="text" name="capacity" id="" class="form-control" placeholder="course capacity" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="">Course Day</label>
                <input type="text" name="day" id="" class="form-control" placeholder="course day" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="">Course Start Time</label>
                <input type="time" name="start_time" id="" class="form-control" placeholder="start time" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="">Course End Time</label>
                <input type="time" name="end_time" id="" class="form-control" placeholder="start time" aria-describedby="helpId">
              </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
<table class="table">
    <title>Students</title>
    <thead>
        <tr>
            <th>NO.</th>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Course Capacity</th>
            <th>Course Day</th>
            <th>Course Start time</th>
            <th>Course End time</th>

            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($courses as $key=>$course)
       <tr>
        <td scope="row">{{ $key+1 }}</td>
        <td>{{ $course->identification }}</td>
        <td>{{ $course->name }}</td>
        <td>{{ $course->capacity }}</td>
        <td>{{ $course->day }}</td>
        <td>{{ $course->start_time }}</td>
        <td>{{ $course->end_time }}</td>
<td>
          <form action="{{ route('course.delete',$course) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary" type="submit">delete</button>
        </form>
        </td>
    </tr>

       @endforeach
    </tbody>
</table>
@endsection
