@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Promotions</h1>
    <a href="{{ route('promotions.create') }}" class="btn btn-primary mb-3">Create New Promotion</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>Type</th>
                <th>Rule</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($promotions as $promotion)
                <tr>
                    <td>{{ $promotion->id }}</td>
                    <td>{{ $promotion->product_id }}</td>
                    <td>{{ $promotion->type }}</td>
                    <td>{{ $promotion->rule }}</td>
                    <td>{{ $promotion->start_date ? $promotion->start_date->format('Y-m-d H:i') : 'N/A' }}</td>
                    <td>{{ $promotion->end_date ? $promotion->end_date->format('Y-m-d H:i') : 'N/A' }}</td>
                    <td>
                        <a href="{{ route('promotions.show', $promotion->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('promotions.edit', $promotion->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this promotion?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
