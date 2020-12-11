@extends('layouts.app')
@section('content')
<div class="container">
    <h4 class="font-weight-bold">Edit {{ $student->name }}</h4>
<form action="{{ route('student.update',$student) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
      <label for="">Student ID</label>
      <input type="text" name="identification" id="" value="{{ old('identification') ?? $student->identification }}" class="form-control" placeholder="student id" aria-describedby="helpId">
    </div>
    <div class="form-group">
      <label for="">Student ID</label>
      <input type="text" name="name" id="" value="{{ old('identification') ?? $student->name }}" class="form-control" placeholder="student name" aria-describedby="helpId">
    </div>
    <div class="float-right">
        <button name="submit" class="btn btn-primary">update</button>
    </div>
</form>
</div>
@endsection
