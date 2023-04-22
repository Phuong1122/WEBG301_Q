<?php

namespace App\Http\Controllers;

use App\Models\BoardGames;
use App\Models\Customers;
use App\Models\Sales;
use App\Models\Carts;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $carts = Carts::all();
        return view('carts.index', ['carts' => $carts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $boardgames = BoardGames::all();
        $customers = Customers::all();
        $sales = Sales::all();
        return view('carts.create', ['boardgames' => $boardgames, 'customers' => $customers,'sales' => $sales]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cart = new carts();
        $cart->ID = $request->input('ID');
        $cart->sales_id = $request->input('sales_id');
        $cart->customer_id = $request->input('customer_id');
        $cart->boardgames_name = $request->input('boardgames_name');
        $cart->boardgames_quantity = $request->input('boardgames_quantity');
        $cart->boardgames_price = $request->input('boardgames_price');
        $cart->save();
        return redirect()->route('carts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $cart = carts::find($id);
        return view('carts.show', ['cart' => $cart]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $boardgames = Boardgames::all();
        $customers = Customers::all();
        $sales = Sales::all();
        $cart = carts::find($id);
        return view('carts.edit', ['boardgames' => $boardgames, 'customers' => $customers,'sales' => $sales]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cart = carts::find($id);
        $cart->ID = $request->input('ID');
        $cart->sales_id = $request->input('sales_id');
        $cart->customer_id = $request->input('customer_id');
        $cart->boardgames_name = $request->input('boardgames_name');
        $cart->boardgames_quantity = $request->input('boardgames_quantity');
        $cart->boardgames_price = $request->input('boardgames_price');
        $cart->save();
        return redirect()->route('carts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $cart = carts::find($id);
        $cart->delete();
        return redirect()->route('carts.index');
    }
}
