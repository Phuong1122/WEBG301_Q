@extends('layouts.app')
@section('title', 'Customers')
@section('content')
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Phone Number</th>
                <th>Is Customer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                
                <tr>
                    <td>{{ $customer->Name }}</td>
                    <td>{{ $customer->ID }}</td>
                    <td>{{ $customer->Phone }}</td>
                    <td>{{ $customer->IsCustomer }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection