<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
      $products =  product::all();
        return $products;
    }


    public function store(Request $request)
    {
        $product =  new product();
        $product -> decription = $request->decription;
        $product -> price = $request->price;
        $product -> stock = $request->stock;

        $product->save();
    }

    public function show($id)
    {
        $product  = product::find($id);
        return $product;
    }

    public function update(Request $request, $id)
    {
        $product = product::findOrFail($request->id);
        $product->decription = $request->decription;
        $product->price = $request->price;
        $product->stock = $request->stock;

       $product->save();
    }


    public function destroy($id)
    {
        $product  =  product::destroy($id);
        return $product;
    }
}
