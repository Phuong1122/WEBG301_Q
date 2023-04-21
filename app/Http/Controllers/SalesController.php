<?php

namespace App\Http\Controllers;

use App\Models\BoardGames;
use App\Models\Customers;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::all();
        return view('sales.index', ['sales' => $sales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $boardgames = BoardGames::all();
        $customers = Customers::all();
        return view('sales.create', ['boardgames' => $boardgames, 'customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sale = new Sales();
        $sale->ID = $request->input('ID');
        $sale->boardgames_id = $request->input('boardgames_id');
        $sale->customer_id = $request->input('customer_id');
        $sale->save();
        return redirect()->route('sales.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sale = Sales::find($id);
        return view('sales.show', ['sale' => $sale]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $boardgames = Boardgames::all();
        $customers = Customers::all();
        $sale = Sales::find($id);
        return view('sales.edit', ['sale' => $sale, 'boardgames' => $boardgames, 'customers' => $customers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sale = Sales::find($id);
        $sale->ID = $request->input('ID');
        $sale->boardgames_id = $request->input('boardgames_id');
        $sale->customer_id = $request->input('customer_id');
        $sale->save();
        return redirect()->route('sales.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sale = Sales::find($id);
        $sale->delete();
        return redirect()->route('sales.index');
    }
}
