<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
    
    public function index()
    {
        //
    }

    
    public function create()
    {


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

            $order->product_id = json_encode($productId) ;


            $order->product_quantity = json_encode($productQuantity) ;

            $order->user_id = Auth::id();

            $order->save();

            session()->forget('cart');

            return redirect()->back()->with('success', 'Order has been done successfully!');
            
        }

        return redirect()->back()->with('error', 'No product has been added yet!');
    }

    
    
}
