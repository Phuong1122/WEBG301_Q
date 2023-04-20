<?php

namespace App\Http\Controllers;

use App\Models\BoardGames;
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
        return view('boardgames.index', ['boardgames' => $boardgames]);
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
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
