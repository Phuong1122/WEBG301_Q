@extends('layouts.app')
@section('title', 'Boardgame Details')
@section('content')
    Make: {{ $boardgame->make }}
    <br/>
    Model: {{ $boardgame->model }}
    <br/>
    Travelled Distance: {{ $boardgame->travelledDistance }}   
    <br/>
    <a href="/boardgames/{{ $boardgame->id }}/edit" class="btn btn-primary">Edit</a>

    <form method="POST" action="/boardgames/{{ $boardgame->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>

    </form>
    <h1>Related Sale</h1>
    @if ($boardgame->sale)
        <p>Discount: {{ $boardgame->sale->discount }}</p>
        <p>Customer: {{ $boardgame->sale->Customer->name }}</p>
        
    @endif

    <h1>Related Category</h1>
    <a href="{{ route('parts.create') }}">Create</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($boardgame->category as $bg)
                <tr>
                    <td>{{ $bg->ID }}</td>
                    <td>{{ $bg->name }}</td>
                    <td>{{ $bg->Category }}</td>
                    <td>{{ $bg->Description }}</td>
                    <td>{{ $bg->Quantity }}</td>
                    <td>{{ $bg->Price }}</td>
                    <td>{{ $bg->Action}}</td>
                    <td>
                        <a href="{{ route('category.edit', $bg->id) }}">Edit</a>
                        <form action="{{ route('category.destroy', $bg->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    

@endsection