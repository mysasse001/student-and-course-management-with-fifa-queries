@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <h4 class="text-center  font-weight-bold ">Your search results</h4>
    </div>
    <div class="row">
   @foreach ($teams as $team)
   {{ $team->name }}
@endforeach


    @if($teams->count())
    @foreach ($heights as $player)
    {{ $player->name }}
@endforeach
    @endif
  @if($weights->count())
  {{ $weights->count() }}{{ $weights->count() ==1 ?'player':'players' }}<br>
  @foreach ($weights as $weight)
    {{ $weight->name }}
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
