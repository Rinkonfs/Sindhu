<?php

namespace App\Http\Controllers\Order;

use App\Crud;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CrudsController;
use App\Models\Address;
use App\Models\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserOrderController extends Controller
{

    public function index()
    {
        $totalCosts = 0;
        $productCounter = 0;
        $productsQuantityCounter = 0;

        $orders = Order::where('user_id', Auth::id())->paginate(10);

        //return $orders;


        $productsId = json_decode($orders[0]->product_id);
   
       $productsQuantity = json_decode($orders[0]->product_quantity);


        foreach ($productsId as $index => $productId )
        {
            $product = Crud::find($productId->product_id);
            $productCounter++;
            $productsQuantityCounter += $productsQuantity[$index]->product_quantity;
            $totalCosts += ( $product->productPrice * $productsQuantity[$index]->product_quantity );
        }
        
            return view('pages.users-orders-history-index', compact('orders', 'productCounter', 'productsQuantityCounter', 'totalCosts'));
            
    }

    public function show(Order $order)
    {
        $productsId = json_decode($order->product_id);
        $productsQuantity = json_decode($order->product_quantity);

        $totalCosts = 0;

        foreach ($productsId as $index => $productId)
        {
            $product = Crud::find($productId->product_id);
            $products[] =[ 'product' => $product ];
            $totalCosts += $product->productPrice * $productsQuantity[$index]->product_quantity;
        }

        return view('pages.users-order-show', compact('products', 'productsQuantity', 'totalCosts'));
    }

        public function create(Request $request)
    {

        if(!Auth::user())
        {
            $user = new User();

            $user->name = $request->first_name. ' ' . $request->first_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $password = Str::random(20);
            $user->password = bcrypt($password);

            $user->save();

        }
        else
        {
            Auth::user()->phone = $request->phone;

            Auth::user()->save();
        }

        $address = new Address();
        $address->country = $request->country;
        $address->street = $request->street;
        $address->apartment = $request->apartment ? $request->apartment : '';
        $address->city = $request->city;
        $address->post_code = $request->post_code;

        if(!Auth::user())
            $user->address()->save($address);
        else
            Auth::user()->address()->save($address);

        $carts = session()->get('cart');

        // if cart is empty then this the first product
        if($carts)
        {
            foreach($carts as $cart)
            {
                $productId[] = [
                    'product_id' => $cart['id']
                ];

                $productQuantity[] = [
                    'product_quantity' => $cart['quantity']
                ];
    
            }

            $order = new Order();
            $order->user_id = Auth::id() ? Auth::id() : $user->id ;
            $order->order_status = "Pending"; // will be dynamic
            $order->payment_status = "Pending"; // will be dynamic
            // $order->payment_method = "None"; // will be dynamic
            $order->product_id = json_encode($productId) ;
            $order->product_quantity = json_encode($productQuantity) ;
            $order->payment_method = $request->optradio;

            $order->save();

            session()->forget('cart');

            return view('pages.checkout')->with('success', 'Order has been done successfully!');
            
        }

        return view('pages.checkout')->with('error', 'No product has been added yet!');
    }

    
    
}
