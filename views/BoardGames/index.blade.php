@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Board Games') }}</div>

                    <div class="card-body">
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
                                @foreach($boardgames as $boardgame)
                                    <tr>
                                        <td>{{ $boardgame->ID }}</td>
                                        <td>{{ $boardgame->Name }}</td>
                                        <td>{{ $boardgame->Category }}</td>
                                        <td>{{ $boardgame->Description }}</td>
                                        <td>{{ $boardgame->Quantity }}</td>
                                        <td>{{ $boardgame->Price }}</td>
                                        <td>
                                            <a href="{{ route('boardgames.show', $boardgame->id) }}" class="btn btn-primary">Detail</a>
                                            <a href="{{ route('boardgames.edit', $boardgame->id) }}" class="btn btn-secondary">Edit</a>
                                            <form action="{{ route('boardgames.destroy', $boardgame->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
