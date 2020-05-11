<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

        $products = Product::paginate(4);
       /* foreach($products as $product){
            dd($product->price->price);
        }*/

        return view('layouts/products/products', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('layouts/products/product', compact('product'));
    }
}
