@extends('layouts.app')
@section('content')

<div class="p-4">

    <h4 class="font-weight-bold">Edit {{ $player->name }}</h4>
    <form class="" action="{{ route('player.update',$player) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="">Team Name</label>
            <input type="text" name="team" id="" value="{{ old('team') ?? $player->team }}" class="form-control"
                placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Player Number</label>
            <input type="text" name="number" id="" value="{{ old('number') ?? $player->number }}" class="form-control"
                placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Player Name</label>
            <input type="text" name="name" id="" value="{{ old('name') ?? $player->name }}" class="form-control"
                placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Player Height</label>
            <input type="text" name="height" id="" value="{{ old('height') ?? $player->height }}" class="form-control"
                placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Player Weight</label>
            <input type="text" name="weight" id="" value="{{ old('weight') ?? $player->weight }}" class="form-control"
                placeholder="" aria-describedby="helpId">
        </div>
        <div class="float-right">
            <button name="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</div>
@endsection