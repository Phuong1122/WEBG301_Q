@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sale Details</div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <td>{{$sale->ID}}</td>
                            </tr>
                            <tr>
                                <th>Boardgame</th>
                                <td>{{$sale->boardgame->name}}</td>
                            </tr>
                            <tr>
                                <th>Customer</th>
                                <td>{{$sale->customer->name}}</td>
                            </tr>
                        </table>
                        <div class="mt-3">
                            <a href="{{ route('sales.index') }}" class="btn btn-secondary">Back to Sales</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection