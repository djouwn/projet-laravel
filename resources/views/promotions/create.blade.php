@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Promotion</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('promotions.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="product_id" class="form-label">Product ID</label>
            <input type="number" name="product_id" class="form-control" id="product_id" value="{{ old('product_id') }}" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="type" value="{{ old('type') }}" required>
        </div>

        <div class="mb-3">
            <label for="rule" class="form-label">Rule</label>
            <textarea name="rule" class="form-control" id="rule" required>{{ old('rule') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="datetime-local" name="start_date" class="form-control" id="start_date" value="{{ old('start_date') }}" required>
        </div>

        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="datetime-local" name="end_date" class="form-control" id="end_date" value="{{ old('end_date') }}" required>
        </div>

        <button type="submit" class="btn btn-success">Create Promotion</button>
        <a href="{{ route('promotions.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>
@endsection
