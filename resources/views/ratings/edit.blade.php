<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rating</title>
</head>
<body>
    <h1>Edit Rating</h1>
    <form action="{{ route('ratings.update', $rating) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="rating">Rating:</label>
        <select name="rating" id="rating" required>
            <option value="1" {{ $rating->rating == 1 ? 'selected' : '' }}>1</option>
            <option value="2" {{ $rating->rating == 2 ? 'selected' : '' }}>2</option>
            <option value="3" {{ $rating->rating == 3 ? 'selected' : '' }}>3</option>
            <option value="4" {{ $rating->rating == 4 ? 'selected' : '' }}>4</option>
            <option value="5" {{ $rating->rating == 5 ? 'selected' : '' }}>5</option>
        </select>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
