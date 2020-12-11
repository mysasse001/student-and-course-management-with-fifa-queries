@extends('layouts.app')



@section('content')
<div class="container p-4">
        <h4 class="text-center  font-weight-bold ">Your search results</h4>
    <div class="d-flex flex-column">
        @foreach ($teams as $team)
        <div class="">{{ $team->name }}</div>
        @endforeach


        @if($heights->count())
        @foreach ($heights as $player)
        <div>{{ $player->name }}</div>
        @endforeach
        @endif
        @if($weights->count())
        {{ $weights->count() }}{{ $weights->count() == 1 ?'player':'players' }}<br>
        @foreach ($weights as $weight)
        <div class="row">
            <div class="col-md-12">
                {{ $weight->name }}
            </div>
        </div>
        @endforeach
        @endif
        @if($numbers->count())
        @foreach ($numbers as $number)
        <ol>
            <li>{{ $number->team }}{{ $number->number }}{{ $number->name }}</li>
        </ol>
        @endforeach
        @endif


    </div>
</div>
@endsection
