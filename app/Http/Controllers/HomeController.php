<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::user()->user_type == '1') {
            return view('admin.home');
        } else {
            $products = product::paginate(6);
            return view('user.home', compact('products'));
        }
    }
    public function index()
    {
        $products = product::paginate(6);
        return view('user.home', compact('products'));
    }

    public function allProducts()
    {
        $products = product::paginate(9);
        return view('user.products', compact('products'));
    }

    // public function show($id)
    // {
    //     $product = Product::findOrFail($id);
    //     return view('user.show', compact('product'));
    // }
}
