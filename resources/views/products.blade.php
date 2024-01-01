<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product CRUD</title>
</head>

<body>
    <h1>Product CRUD</h1>

    {{-- Form untuk menambah produk --}}
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" required>
        <label for="description">Description:</label>
        <textarea name="description"></textarea>
        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required>
        <label for="stock">Stock:</label>
        <input type="number" name="stock" required>
        <button type="submit">Add Product</button>
    </form>

    {{-- Daftar produk --}}
    <ul>
        @foreach($products as $product)
        <li>
            {{ $product->name }} -
            {{ $product->description }} -
            ${{ $product->price }} -
            Stock: {{ $product->stock }}

            {{-- Tombol untuk mengedit produk --}}
            <a href="{{ route('products.edit', $product->id) }}">Edit</a>

            {{-- Tombol untuk menghapus produk --}}
            <form action="{{ route('products.destroy', $product->id) }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>

</html>