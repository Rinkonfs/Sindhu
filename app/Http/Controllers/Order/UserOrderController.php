<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserOrderController extends Controller
{
    
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

            $order->product_id = json_encode($productId) ;


            $order->product_quantity = json_encode($productQuantity) ;

            $order->user_id = Auth::id() ? Auth::id() : $user->id ;

            $order->save();

            session()->forget('cart');

            return redirect()->back()->with('success', 'Order has been done successfully!');
            
        }

        return redirect()->back()->with('error', 'No product has been added yet!');
    }

    
    
}
