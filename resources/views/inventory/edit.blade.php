<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Inventory Item</title>
</head>
<body>
    <h1>Edit Item: {{ $inventoryItem->name }}</h1>

    <!-- Display validation errors if any -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="https://verbose-spoon-5gq6gq7g99wjh4rvx-8000.app.github.dev/inventory/{{ $inventoryItem->id }}">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 10px;">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ old('name', $inventoryItem->name) }}" required>
        </div>
        
        <div style="margin-bottom: 10px;">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="{{ old('quantity', $inventoryItem->quantity) }}" required>
        </div>
        
        <div style="margin-bottom: 10px;">
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $inventoryItem->price) }}" required>
        </div>
        
        <button type="submit">Update Item</button>
    </form>
    
    <div style="margin-top: 20px;">
        <a href="https://verbose-spoon-5gq6gq7g99wjh4rvx-8000.app.github.dev/inventory">Back to Inventory</a>
    </div>
</body>
</html>
