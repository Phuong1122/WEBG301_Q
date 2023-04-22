@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Carts List') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Sales ID</th>
                                    <th>Customer ID</th>
                                    <th>Board Games Name</th>
                                    <th>Board Games Quantity</th>
                                    <th>Board Games Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($carts as $cart)
                                    <tr>
                                        <td>{{ $cart->ID }}</td>
                                        <td>{{ $cart->sales_id }}</td>
                                        <td>{{ $cart->customer_id }}</td>
                                        <td>{{ $cart->boardgames_name }}</td>
                                        <td>{{ $cart->boardgames_quantity }}</td>
                                        <td>{{ $cart->boardgames_price }}</td>
                                        <td>
                                            <a href="{{ route('carts.show', $cart->id) }}">View</a> |
                                            <a href="{{ route('carts.edit', $cart->id) }}">Edit</a> |
                                            <form method="POST" action="{{ route('carts.destroy', $cart->id) }}" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link" style="color: red; padding: 0;">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection