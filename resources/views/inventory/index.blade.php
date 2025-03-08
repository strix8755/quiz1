<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory List</title>
</head>
<body>
    <h1>Inventory List</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventoryItems as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>
                    <form action="https://verbose-spoon-5gq6gq7g99wjh4rvx-8000.app.github.dev/inventory/{{ $item->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                    <a href="https://verbose-spoon-5gq6gq7g99wjh4rvx-8000.app.github.dev/inventory/{{ $item->id }}">Edit Item</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Fix this line to use the full URL with https protocol -->
    <a href="https://verbose-spoon-5gq6gq7g99wjh4rvx-8000.app.github.dev/inventory/create">Add New Item</a>
</body>
</html>
