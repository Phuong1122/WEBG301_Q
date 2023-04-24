@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $category->name }}</h1>
                <p>Number of Board Games: {{ $category->BoardGames->count() }}</p>
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories</a>
            </div>
        </div>
    </div>
@endsection