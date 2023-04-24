@extends('layouts.app')
@section('title', 'Create Customer')
@section('content')
    <form action="{{ route('customers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="Name">Name</label>
            <input type="text" name="Name" id="Name">
        </div>
        <div>
            <label for="Identification">ID</label>
            <input type="text" name="Identification" id="Identification">
        </div>
        <div>
            <label for="Phone">Phone Number</label>
            <input type="text" name="Phone" id="Phone">
        </div>
        <div>
            <label for="IsCustomer">Is Customer</label>
            <input type="hidden" name="IsCustomer" id="IsCustomer" value="0">
            <input type="checkbox" name="IsCustomer" id="IsCustomer">
        </div>
        <div>
            <button type="submit">Create</button>
        </div>
@endsection