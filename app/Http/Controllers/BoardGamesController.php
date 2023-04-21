<?php

namespace App\Http\Controllers;

use App\Models\BoardGames;
use App\Models\Category;
use Illuminate\Http\Request;

class BoardGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $boardgames = boardgames::all();
        // dd($boardgamess);
        return view('boardgame.index', ['boardgames' => $boardgames]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $boardgames = boardgames::all();
        return view('boardgames.create', ['boardgames' => $boardgames]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $boardgame = new BoardGames();
        $boardgame->ID = $request->input('ID');
        $boardgame->Name = $request->input('Name');
        $boardgame->Category = $request->input('Category');
        $boardgame->Description = $request->input('Description');
        $boardgame->Quantity = $request->input('Quantity');
        $boardgame->Price = $request->input('Price');
        $boardgame->save();
        $boardgame->category()->attach($request->input('category'));
        return redirect()->route('boardgames.index');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $boardgame = BoardGames::find($id);
        return view('boardgames.detail', ['boargames' => $boardgame]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $boardgame = BoardGames::find($id);
        $categories = Category::all();
        return view('boardgames.edit', [
            'boardgames' => $boardgame, 
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $boardgame = BoardGames::find($id);
        $boardgame->boardgames_name = $request->boardgames_name;
        $boardgame->boardgames_description = $request->boardgames_description;
        $boardgame->boardgames_quantity = $request->boardgames_quantity;
        $boardgame->boardgames_price = $request->boardgames_price;
        $boardgame->category_id = $request->category_id;
        $boardgame->save();
        return redirect('/boardgames')->with('success', 'Boardgame updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $boardgame = BoardGames::find($id);
        $boardgame->delete();
        return redirect('/boardgames')->with('success', 'Boardgame deleted successfully.');
    }
}
