<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inventory Item</title>
</head>
<body>
    <h1>Inventory Item: {{ $inventoryItem->name }}</h1>

    <p>Quantity: {{ $inventoryItem->quantity }}</p>
    <p>Price: ${{ $inventoryItem->price }}</p>

    <a href="{{ url('/inventory') }}">Back to Inventory</a>
</body>
</html>
