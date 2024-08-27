<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Favorites</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>Your Favorite Products</h1>

            @if($favorites->isEmpty())
                <p>You have no favorite products.</p>
            @else
                <ul>
                    @foreach($favorites as $favorite)
                        <li>
                            <h2>{{ $favorite->product->name }}</h2>
                            <p>Price: ${{ $favorite->product->price }}</p>
                            <form action="{{ url('/favorites/' . $favorite->product_id) }}" method="POST" class="remove-favorite-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Remove from Favorites</button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const removeFavoriteForms = document.querySelectorAll('.remove-favorite-form');
                removeFavoriteForms.forEach(form => {
                    form.addEventListener('submit', function (e) {
                        e.preventDefault();
                        const formData = new FormData(form);

                        fetch(form.action, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            },
                            body: formData,
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                form.closest('li').remove();
                            } else {
                                alert('Failed to remove from favorites');
                            }
                        });
                    });
                });
            });
        </script>
    @endsection
</body>
</html>
