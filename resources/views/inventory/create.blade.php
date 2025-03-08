<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Inventory Item</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: inline-block; width: 100px; }
        button { padding: 5px 10px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <h1>Create a New Inventory Item</h1>

    @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Notice the full URL in the form action -->
    <form method="POST" action="https://verbose-spoon-5gq6gq7g99wjh4rvx-8000.app.github.dev/inventory">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>
        
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" value="{{ old('quantity') }}" required>
        </div>
        
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" value="{{ old('price') }}" required>
        </div>
        
        <button type="submit">Create Item</button>
    </form>
    
    <p><a href="https://verbose-spoon-5gq6gq7g99wjh4rvx-8000.app.github.dev/inventory">Back to Inventory</a></p>
</body>
</html>
