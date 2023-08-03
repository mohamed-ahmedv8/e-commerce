<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function products()
    {
        $products = product::all();
        return view('admin.allProducts', compact('products'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => 'required|string|max:255',
            "desc" => 'required|string',
            "price" => 'required|numeric',
            "quantity" => 'required|numeric',
            "image" => 'required|image|mimes:jpg,jpeg,png',
        ]);
        $data['image'] = Storage::putFile('products', $data['image']);
        product::create($data);
        return redirect(url('products'))->with("success", "Data inserted successfully");
    }

    public function edit($id)
    {
        $product = product::findOrFail($id);

        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "name" => 'required|string|max:255',
            "desc" => 'required|string',
            "price" => 'required|numeric',
            "quantity" => 'required|numeric',
            "image" => 'image|mimes:jpg,jpeg,png',
        ]);
        $product = product::findOrFail($id);
        if ($request->has('image')) {
            Storage::delete($product->image);
            $data['image'] = Storage::putFile('products', $data['image']);
        }
        $product->update($data);
        return redirect(url('products'))->with("success", "Data updated successfully");
    }

    public function delete($id)
    {
        $product = product::findOrFail($id);
        Storage::delete($product->image);
        $product->delete();
        return redirect(url('products'))->with("success", "Data deleted successfully");
    }

    public function search(Request $request)
    {
        $key = $request->key;
        $products = Product::where('name', 'like', "%$key%")->get();
        return view('admin.allProducts', compact('products'));
    }
}
