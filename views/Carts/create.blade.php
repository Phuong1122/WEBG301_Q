@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create New Cart</h2>
        <form action="{{ route('carts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="sales_id">Sales ID:</label>
                <select class="form-control" id="sales_id" name="sales_id">
                    @foreach($sales as $sale)
                        <option value="{{ $sale->id }}">{{ $sale->id }} - {{ $sale->date }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="customer_id">Customer ID:</label>
                <select class="form-control" id="customer_id" name="customer_id">
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->id }} - {{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="boardgames_name">Boardgames Name:</label>
                <select class="form-control" id="boardgames_name" name="boardgames_name">
                    @foreach($boardgames as $boardgame)
                        <option value="{{ $boardgame->name }}">{{ $boardgame->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="boardgames_quantity">Boardgames Quantity:</label>
                <input type="number" class="form-control" id="boardgames_quantity" name="boardgames_quantity" required>
            </div>
            <div class="form-group">
                <label for="boardgames_price">Boardgames Price:</label>
                <input type="number" class="form-control" id="boardgames_price" name="boardgames_price" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Cart</button>
        </form>
    </div>
@endsection