<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Services\Product\ProductServices;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $products = Product::all();

        return view('pages/shop', compact('products'));
    }


    public function create()
    {
        return view('product-test-admin');
    }


    public function store(Request $request)
    {
        (new ProductServices())->storeProduct($request);
        return "added image";
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        //
    }


    public function update(Request $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }



//    private function checkUser(Request $request)
//    {
//        if($request->is('admin/*') || $request->is('admin') )
//            return true;
//
//        else
//            return false;
//    }
}
