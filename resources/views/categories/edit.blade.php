@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="age">Age</label>
            <select id="age" name="age" class="form-control" required>
                <option value="adult" {{ $category->age == 'adult' ? 'selected' : '' }}>Adult</option>
                <option value="kids" {{ $category->age == 'kids' ? 'selected' : '' }}>Kids</option>
                <option value="teenager" {{ $category->age == 'teenager' ? 'selected' : '' }}>Teenager</option>
            </select>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <select id="genre" name="genre" class="form-control" required>
                <option value="male" {{ $category->genre == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $category->genre == 'female' ? 'selected' : '' }}>Female</option>
                <option value="other" {{ $category->genre == 'other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select id="type" name="type" class="form-control" required>
                <option value="sac" {{ $category->type == 'sac' ? 'selected' : '' }}>Sac</option>
                <option value="espadrille" {{ $category->type == 'espadrille' ? 'selected' : '' }}>Espadrille</option>
                <option value="accessoire" {{ $category->type == 'accessoire' ? 'selected' : '' }}>Accessoire</option>
                <option value="sandles" {{ $category->type == 'sandles' ? 'selected' : '' }}>Sandles</option>
                <option value="baskets" {{ $category->type == 'baskets' ? 'selected' : '' }}>Baskets</option>
                <option value="glasses" {{ $category->type == 'glasses' ? 'selected' : '' }}>Glasses</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
