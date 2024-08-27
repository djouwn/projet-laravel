
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Category</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="age">Age</label>
            <select id="age" name="age" class="form-control" required>
                <option value="adult">Adult</option>
                <option value="kids">Kids</option>
                <option value="teenager">Teenager</option>
            </select>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <select id="genre" name="genre" class="form-control" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select id="type" name="type" class="form-control" required>
                <option value="sac">Sac</option>
                <option value="espadrille">Espadrille</option>
                <option value="accessoire">Accessoire</option>
                <option value="sandles">Sandles</option>
                <option value="baskets">Baskets</option>
                <option value="glasses">Glasses</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
