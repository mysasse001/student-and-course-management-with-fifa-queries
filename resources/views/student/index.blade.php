@extends('layouts.app')
@section('content')
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
  Add student
</button>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content" action="{{ route('student.store') }}" method="POST">
            <div class="modal-header">
                <h5 class="modal-title">Add student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
              @csrf
              <div class="form-group">
                <label for="">Student ID</label>
                <input type="text" name="identification" id="" class="form-control" placeholder="student id" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="">Student ID</label>
                <input type="text" name="name" id="" class="form-control" placeholder="student name" aria-describedby="helpId">
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
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
       @foreach ($students as $key=>$student)
       <tr>
        <td scope="row">{{ $key+1 }}</td>
        <td>{{ $student->identification }}</td>
        <td>{{ $student->name }}</td>
        <td class="d-flex"><a class="btn btn-primary" href="{{ route('student.edit',$student) }}">Edit</a>
          <form action="{{ route('student.delete',$student) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary" type="submit">delete</button>
        </form>
        <a href="{{ route('add.student.courses',$student) }}" class="btn btn-primary">Courses</a>
        </td>
    </tr>

       @endforeach
    </tbody>
</table>
@endsection
