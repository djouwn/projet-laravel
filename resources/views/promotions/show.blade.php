@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Promotion Details</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $promotion->id }}
    </div>

    <div class="mb-3">
        <strong>Product ID:</strong> {{ $promotion->product_id }}
    </div>

    <div class="mb-3">
        <strong>Type:</strong> {{ $promotion->type }}
    </div>

    <div class="mb-3">
        <strong>Rule:</strong> {{ $promotion->rule }}
    </div>
    <div class="mb-3">
        <strong>Rule:</strong> {{ $promotion->start_date }}
    </div>
    <div class="mb-3">
        <strong>Rule:</strong> {{ $promotion->end_date }}
    </div>

    <a href="{{ route('promotions.index') }}" class="btn btn-secondary">Back to List</a>
    <a href="{{ route('promotions.edit', $promotion->id) }}" class="btn btn-warning">Edit</a>

    <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this promotion?');">Delete</button>
    </form>
</div>
@endsection
