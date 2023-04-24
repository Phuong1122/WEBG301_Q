@extends('layouts.app')
@section('title', 'Edit BoardGames')
@section('header')
    @include('partials.header')
@section('content')
    <form method="POST" action="/boardgames/{{ $boardgame->id }}">
        @csrf
        @method('PUT')
        <div>
            <label for="ID">ID</label>
            <input type="text" name="ID" id="ID" value="{{ $boardgame->ID }}">
        </div>
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" value="{{ $boardgame->Name }}">
        </div>
        <div>
            <label for="Category">Category</label>
            <input type="text" name="Category" id="Category" value="{{ $boardgame->Category }}">
        </div>
        <div>
            <label for="Description">Description</label>
            <input type="text" name="Description" id="Description" value="{{ $boardgame->Description }}">
        </div>
        <div>
            <label for="Category">Quantity</label>
            <input type="text" name="Quantity" id="Quantity" value="{{ $boardgame->Quantity }}">
        </div>
        <div>
            <label for="Price">Price</label>
            <input type="text" name="Price" id="Price" value="{{ $boardgame->Price }}">
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
@endsection