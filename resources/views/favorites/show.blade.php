<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>{{ $product->name }}</h1>
            <p>Price: ${{ $product->price }}</p>

            @auth
                @if($isFavorite)
                    <form action="{{ url('/favorites/' . $product->id) }}" method="POST" class="remove-favorite-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Remove from Favorites</button>
                    </form>
                @else
                    <form action="{{ url('/favorites') }}" method="POST" class="add-favorite-form">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit">Add to Favorites</button>
                    </form>
                @endif
            @endauth
        </div>

       

    @endsection
</body>
</html>
