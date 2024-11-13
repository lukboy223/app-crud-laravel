<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $Request){
        $data = $Request->validate([
            'name'          => 'required',
            'amount'        => 'required | numeric',
            'price'         => 'required | decimal:0,2',
            'description'   => 'required'
        ]);

        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }
}
