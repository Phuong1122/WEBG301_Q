@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>Add Sale</h1>
            </div>
            <div class="col-md-2">
                <a href="{{ route('sales.index') }}" class="btn btn-default">Back</a>
            </div>
        </div>
        <hr>
        <form action="{{ route('sales.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="boardgames_id">Board Game:</label>
                <select name="boardgames_id" id="boardgames_id" class="form-control">
                    @foreach($boardgames as $boardgame)
                        <option value="{{ $boardgame->id }}">{{ $boardgame->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="customer_id">Customer:</label>
                <select name="customer_id" id="customer_id" class="form-control">
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection