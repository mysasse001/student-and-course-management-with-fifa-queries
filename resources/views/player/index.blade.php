@extends('layouts.app')
@section('content')

<div class="p-4">

    <div class="py-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
            Add Player
        </button>
    </div>
    <form action="{{ route('player.search') }}" method="GET">
        <div class="input-group mb-4">
            <input type="search" list="tags" value="{{ old('search_query', request()->input('search_query')) }}"
                name="search_query" placeholder="Query" aria-describedby="button-addon5" class="form-control">

            <div class="input-group-append">
                <button id="button-addon5" type="submit" class="btn btn-primary">search</i></button>
            </div>
        </div>
    </form>
    <table class="table">
        <title>Students</title>
        <thead>
            <tr>
                <th>NO.</th>
                <th>Team Name</th>
                <th>Player Number</th>
                <th>Player Name</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $key=>$player)
            <tr>
                <td scope="row">{{ $key+1 }}</td>
                <td>{{ $player->team }}</td>
                <td>{{ $player->number }}</td>
                <td>{{ $player->name }}</td>
                <td>{{ $player->height }}</td>
                <td>{{ $player->weight }}</td>
                <td class="d-flex">
                    <a href="{{ route('player.edit',$player) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('player.delete',$player) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content" action="{{ route('player.store') }}" method="POST">
            <div class="modal-header">
                <h5 class="modal-title">Add player</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label for="">Team Name</label>
                    <input type="text" name="team" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Player Number</label>
                    <input type="text" name="number" id="" class="form-control" placeholder=""
                        aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Player Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Player Height</label>
                    <input type="text" name="height" id="" class="form-control" placeholder=""
                        aria-describedby="helpId">
                </div>
                <div class="form-group">
                    <label for="">Player Weight</label>
                    <input type="text" name="weight" id="" class="form-control" placeholder=""
                        aria-describedby="helpId">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection