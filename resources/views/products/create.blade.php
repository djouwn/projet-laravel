@extends('layouts.app')

@section('content')
    <h1>Create Product</h1>
    
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description">{{ old('description') }}</textarea>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" value="{{ old('price') }}" required>
        </div>

        <div>
            <label for="matricule">Matricule:</label>
            <input type="text" name="matricule" id="matricule" value="{{ old('matricule') }}" required>
        </div>

        <div>
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity" id="quantity" value="{{ old('quantity') }}">
        </div>

        <div>
            <label for="availablecolor">Available Colors:</label>
            <input type="text" name="availablecolor" id="availablecolor" value="{{ old('availablecolor') }}">
        </div>

        <div>
            <label for="availablesize">Available Sizes:</label>
            <input type="text" name="availablesize" id="availablesize" value="{{ old('availablesize') }}">
        </div>

        <div>
            <label for="similarproducts">Similar Products:</label>
            <input type="text" name="similarproducts" id="similarproducts" value="{{ old('similarproducts') }}">
        </div>

        <div>
            <label for="SKU">SKU:</label>
            <select name="SKU" id="SKU">
                <option value="stock" {{ old('SKU') == 'stock' ? 'selected' : '' }}>Stock</option>
                <option value="vide" {{ old('SKU') == 'vide' ? 'selected' : '' }}>Vide</option>
                <option value="waitingfor" {{ old('SKU') == 'waitingfor' ? 'selected' : '' }}>Waiting for</option>
            </select>
        </div>

        <div>
            <label for="discount">Discount:</label>
            <input type="text" name="discount" id="discount" value="{{ old('discount') }}">
        </div>

        <div>
            <label for="category_id">Category:</label>
            <input type="text" name="category_id" id="category_id" value="{{ old('category_id') }}">
        </div>

        <div>
            <label for="gender">Gender:</label>
            <input type="text" name="gender" id="gender" value="{{ old('gender') }}">
        </div>

        <div>
            <label for="age">Age:</label>
            <input type="text" name="age" id="age" value="{{ old('age') }}">
        </div>

        <div>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image">
        </div>

        <div>
            <label for="image_add1">Additional Image 1:</label>
            <input type="file" name="image_add1" id="image_add1">
        </div>

        <div>
            <label for="image_add2">Additional Image 2:</label>
            <input type="file" name="image_add2" id="image_add2">
        </div>

        <div>
            <label for="image_add3">Additional Image 3:</label>
            <input type="file" name="image_add3" id="image_add3">
        </div>

        <div>
            <label for="producttype">Product Type:</label>
            <input type="text" name="producttype" id="producttype" value="{{ old('producttype') }}">
        </div>

        <button type="submit">Create</button>
    </form>
@endsection
