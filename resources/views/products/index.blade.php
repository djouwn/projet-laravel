@extends('layouts.app')

@section('content')
  <center><h1>Products</h1></center>
    <style>
        h1 {
            font-size: 36px;
        }

        .topnav {
            width: 100%;
            background-color: #f1f1f1;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .topnav .search-container {
            display: flex;
            justify-content: flex-end;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin: 8px 16px;
            font-size: 17px;
            border: 1px solid #ccc;
            border-radius: 4px;
            flex: 1;
        }

        .topnav .search-container button {
            padding: 6px 10px;
            background: #ddd;
            font-size: 17px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .topnav .search-container button:hover {
            background: #ccc;
        }

        @media screen and (max-width: 600px) {
            .topnav .search-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .topnav input[type=text] {
                margin: 0;
                width: 100%;
            }

            .topnav .search-container button {
                margin-top: 8px;
                width: 100%;
            }
        }

        .main-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .filter-sidebar {
            flex: 1;
            max-width: 250px;
            background: #f9f9f9;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        .filter-sidebar h2 {
            margin-top: 0;
            font-size: 20px;
            margin-bottom: 15px;
        }

        .filter-sidebar label {
            display: block;
            margin-bottom: 10px;
        }

        .filter-sidebar input[type="checkbox"] {
            margin-right: 5px;
        }

        .filter-sidebar .price-range {
            margin-top: 20px;
        }

        .filter-sidebar .price-range label {
            display: block;
            margin-bottom: 5px;
        }

        .filter-sidebar .price-range input[type="range"] {
            width: 100%;
        }

        .filter-sidebar .price-range .price-values {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
        }

        .product-container {
            flex: 2;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            margin: 10px;
            padding: 15px;
            text-align: center;
            position: relative;
        }

        .product-card .heart-icon {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 20px;
            color: #ff6b6b;
            cursor: pointer;
        }

        .product-card img {
            width: 100%;
            height: 200px; 
            object-fit: cover; 
            border-bottom: 1px solid #ddd;
            margin-bottom: 15px;
        }

        .product-card h3 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #333;
        }

        .product-card p {
            margin: 5px 0;
            color: #555;
        }

        .product-card a {
            display: inline-block;
            padding: 8px 16px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
        }

        .product-card a:hover {
            background-color: #0056b3;
        }

        @media screen and (max-width: 600px) {
            .main-container {
                flex-direction: column;
            }

            .filter-sidebar {
                max-width: 100%;
                margin-bottom: 20px;
            }

            .product-container {
                flex: 1;
            }
        }
    
    </style>

    <center>
        <div class="topnav">
            <div class="search-container">
                <form action="{{ route('products.index') }}" method="GET">
                    <input type="text" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </center>
    <div class="main-container">
        <div class="filter-sidebar">
            <h2>Filters</h2>
            <form action="{{ route('products.index') }}" method="GET">
                <label><input type="checkbox" name="category[]" value="electronics" {{ in_array('electronics', request('category', [])) ? 'checked' : '' }}> Electronics</label>
                <label><input type="checkbox" name="category[]" value="clothing" {{ in_array('clothing', request('category', [])) ? 'checked' : '' }}> Clothing</label>
                <label><input type="checkbox" name="category[]" value="home" {{ in_array('home', request('category', [])) ? 'checked' : '' }}> Home</label>

                <div class="price-range">
                    <label for="min-price">Min Price:</label>
                    <input type="number" id="min-price" name="min-price" min="0" value="{{ request('min-price', 0) }}">

                    <label for="max-price">Max Price:</label>
                    <input type="number" id="max-price" name="max-price" min="0" value="{{ request('max-price', 1000) }}">

                    <button type="submit">Apply Filters</button>
                </div>
            </form>
        </div>

        <div class="product-container">
            @foreach ($products as $product)
                <a href="{{ route('products.show', $product->id) }}">
                    <div class="product-card">
                        <i class="fa fa-heart heart-icon"></i>
                        <div>
                            <img src="{{ asset('storage/' . $product->image) }}"  alt="{{ $product->name }}">
                            <h3>{{ $product->name }}</h3>
                            <p><strong>Price:</strong> {{ $product->price }}</p>
                            <p><strong>Matricule:</strong> {{ $product->matricule }}</p>
                        </div>
                    </div>
                </a>
        
            @endforeach
        </div>
    </div>
@endsection
