@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Promotion</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('promotions.update', $promotion->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="product_id" class="form-label">Product ID</label>
            <input type="number" name="product_id" class="form-control" id="product_id" value="{{ old('product_id', $promotion->product_id) }}" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="type" value="{{ old('type', $promotion->type) }}" required>
        </div>

        <div class="mb-3">
            <label for="rule" class="form-label">Rule</label>
            <textarea name="rule" class="form-control" id="rule" required>{{ old('rule', $promotion->rule) }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Update Promotion</button>
        <a href="{{ route('promotions.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection
