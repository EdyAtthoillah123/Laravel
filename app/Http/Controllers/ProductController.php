<?php

namespace App\Http\Controllers;

use App\Models\Product;// ProductController.php

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function store(StoreProductRequest $request)
    {
        // Validasi data di StoreProductRequest

        Product::create($request->validated());

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('edit-product', compact('product'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        // Validasi data di UpdateProductRequest

        $product = Product::findOrFail($id);
        $product->update($request->validated());

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
