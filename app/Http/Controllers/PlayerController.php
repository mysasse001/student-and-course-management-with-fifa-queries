<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(){
        return view('player.index');
    }

    public function search(Request $request){
        $search_query=$request->get('search_query');
        $teams=Player::where('team','LIKE','%'.$search_query.'%')->get();
        $heights=Player::where('height','LIKE','%'.$search_query.'%')->get();
        $weights = Player::where('weight','LIKE','%'.$search_query.'%')->get();
        $numbers = Player::where('number','LIKE','%'.$search_query.'%')->get();
        return view('player.search',compact('teams','heights','weights','numbers'));
    }

    public function store(Request $request){
        $data=$request->validate([
            'team'=>[],
            'name'=>[],
            'number'=>[],
            'height'=>[],
            'weight'=>[]
        ]);
        Player::create($data);
        return back();
    }

    public function destroy(Player $player){
        $player->delete();
        return back();
    }
}
