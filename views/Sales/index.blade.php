@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>Sales</h1>
            </div>
            <div class="col-md-2">
                <a href="{{ route('sales.create') }}" class="btn btn-primary">Add Sale</a>
            </div>
        </div>
        <hr>
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Board Game</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sales as $sale)
                    <tr>
                        <td>{{ $sale->ID }}</td>
                        <td>{{ $sale->boardGame->name }}</td>
                        <td>{{ $sale->customer->name }}</td>
                        <td>{{ $sale->created_at }}</td>
                        <td>
                            <a href="{{ route('sales.show', $sale->ID) }}" class="btn btn-info">View</a>
                            <a href="{{ route('sales.edit', $sale->ID) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('sales.destroy', $sale->ID) }}" method="POST" style="display: inline-block;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection