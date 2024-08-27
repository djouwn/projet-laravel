<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratings</title>
</head>
<body>
    <h1>Ratings</h1>
    <a href="{{ route('ratings.create') }}">Add New Rating</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Product ID</th>
                <th>Rating</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ratings as $rating)
                <tr>
                    <td>{{ $rating->id }}</td>
                    <td>{{ $rating->user_id }}</td>
                    <td>{{ $rating->product_id }}</td>
                    <td>{{ $rating->rating }}</td>
                    <td>
                        <a href="{{ route('ratings.edit', $rating) }}">Edit</a>
                        <form action="{{ route('ratings.destroy', $rating) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
