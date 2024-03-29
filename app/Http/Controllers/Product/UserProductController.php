<?php

namespace App\Http\Controllers\Product;

use App\Crud;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Delivery\DeliveryChargeController;
use App\Models\Category\productCategory;

class UserProductController extends Controller
{
    public function index()
    {
        $products = Crud::select('id', 'productName', 'productPrice','image','category')->paginate(6);
        $cats = productCategory::all();
       
        return view('pages.shop', compact('products','cats'));
    }
    public function showCategory()
    {
       
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


    public function update()
    {
        $id = $_GET['id'];
        $quantity = $_GET['quantity'];

        $cart = session()->get('cart');

        $product = Crud::find($id);


        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity'] = $cart[$id]['quantity'] + $quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
            

        }

        if(!$cart) {

            $cart = [
                $id => [
                    "id" => $product->id,
                    "name" => $product->productName,
                    "quantity" => $quantity,
                    "price" => $product->productPrice,
                    "photo" => $product->image,
                    "description" => $product->description
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }


        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $product->id,
            "name" => $product->productName,
            "quantity" => $quantity,
            "price" => $product->productPrice,
            "photo" => $product->image,
            "description" => $product->description
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
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
        
       $deliveryCharge = (new DeliveryChargeController)->show();
       
       return view('pages.checkout',compact('deliveryCharge'));
       
    }
}
