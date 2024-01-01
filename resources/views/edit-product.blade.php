<!-- resources/views/edit-product.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="name">Product Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>

        <label for="description">Description:</label>
        <textarea name="description">{{ $product->description }}</textarea>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="{{ $product->stock }}" required>

        <button type="submit">Update Product</button>
    </form>
</body>

</html>