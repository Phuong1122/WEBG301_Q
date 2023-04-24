@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create a new board game</h2>
        <form method="POST" action="{{ route('boardgames.store') }}">
            @csrf
            <div class="form-group">
                <label for="ID">ID:</label>
                <input type="text" class="form-control" id="ID" name="ID" required>
            </div>
            <div class="form-group">
                <label for="Name">Name:</label>
                <input type="text" class="form-control" id="Name" name="Name" required>
            </div>
            <div class="form-group">
                <label for="Category">Category:</label>
                <select class="form-control" id="Category" name="Category" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="Description">Description:</label>
                <textarea class="form-control" id="Description" name="Description" required></textarea>
            </div>
            <div class="form-group">
                <label for="Quantity">Quantity:</label>
                <input type="number" class="form-control" id="Quantity" name="Quantity" required>
            </div>
            <div class="form-group">
                <label for="Price">Price:</label>
                <input type="number" class="form-control" id="Price" name="Price" required>
            </div>
            <div class="form-group">
                <label for="category">Categories:</label>
                <select class="form-control" id="category" name="category[]" multiple>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
