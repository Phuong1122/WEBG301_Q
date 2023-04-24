@extends('layouts.app')
@section('title', 'Edit Customer')
@section('content')
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name" value="{{ $customer->Name }}">
        </div>
        <div>
            <label for="Identification">ID</label>
            <input type="text" name="Identification" id="Identification" value="{{ $customer->ID }}">
        </div>
        <div>
            <label for="Phone">Phone Number</label>
            <input type="text" name="Phone" id="Phone" value="{{ $customer->Phone }}">
        </div>
        <div>
            <label for="IsCustomer">Is Customer</label>
            <input type="checkbox" name="IsCustomer" id="IsCustomer" {{ $customer->IsCustomer ? 'checked' : '' }}>
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
@endsection