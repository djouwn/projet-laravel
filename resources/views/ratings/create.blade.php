<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Rating</title>
</head>
<body>
    <h1>Add Rating</h1>
    <form action="{{ route('ratings.store') }}" method="POST">
        @csrf
        <label for="user_id">User ID:</label>
        <input type="number" name="user_id" id="user_id" required>
        <br>
        <label for="product_id">Product ID:</label>
        <input type="number" name="product_id" id="product_id" required>
        <br>
        <label for="rating">Rating:</label>
        <select name="rating" id="rating" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
