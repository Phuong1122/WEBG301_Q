@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $customer->Name }}</h1>
        <hr>
        <dl class="row">
            <dt class="col-sm-3">ID</dt>
            <dd class="col-sm-9">{{ $customer->ID }}</dd>

            <dt class="col-sm-3">Phone Number</dt>
            <dd class="col-sm-9">{{ $customer->PhoneNumber }}</dd>

            <dt class="col-sm-3">Address</dt>
            <dd class="col-sm-9">{{ $customer->Address }}</dd>
        </dl>
        <hr>
        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary">Edit</a>
        <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection