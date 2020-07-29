<?php

namespace App\Http\Controllers\Product;

use App\Crud;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function index()
    {
        $products = Crud::paginate(5);


        return view('pages.shop', compact('products'));
    }


    public function show(Crud $crud)
    {
        return view('pages.product-single', compact('crud'));
    }


    public function cart()
    {
        return view('pages.cart');
    }


    public function addToCart($id)
    {
        $product = Crud::find($id);

        if(!$product) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "id" => $product->id,
                    "name" => $product->productName,
                    "quantity" => 1,
                    "price" => $product->productPrice,
                    "photo" => $product->image,
                    "description" => $product->description
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $product->id,
            "name" => $product->productName,
            "quantity" => 1,
            "price" => $product->productPrice,
            "photo" => $product->image,
            "description" => $product->description
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {

        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }


    public function checkout(){
        return view('pages.checkout');
    }
}
