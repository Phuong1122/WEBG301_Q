<?php

namespace App\Http\Controllers;

use App\Models\Boardgame;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Boardgame::all();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $game = new Boardgame([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]);
        $game->save();
        return redirect('/games')->with('success', 'Game has been added');
    }

    public function edit($id)
    {
        $game = Boardgame::find($id);
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, $id)
    {
        $game = Boardgame::find($id);
        $game->name = $request->get('name');
        $game->description = $request->get('description');
        $game->save();
        return redirect('/games')->with('success', 'Game has been updated');
    }

    public function destroy($id)
    {
        $game = Boardgame::find($id);
        $game->delete();
        return redirect('/games')->with('success', 'Game has been deleted');
    }
}
