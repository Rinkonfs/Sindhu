<?php

namespace App\Http\Controllers\Coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon\Coupon;
use App\Http\Controllers\Delivery\DeliveryChargeController;


class adminCouponController extends Controller
{
    public function coupon(){
        return view('Backend_Pages/coupon_page');
    } 
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input('catValue');
        $pCoupon =new Coupon();

        $pCoupon->coupon_name=$request->input('coupon_name');
        $pCoupon->coupon_code=$request->input('coupon_code');
        $pCoupon->end_date=$request->input('end_date');
        $pCoupon->discount_percentage=$request->input('discount_percentage');
        $pCoupon->amount_exceed=$request->input('amount_exceed');
        $pCoupon->product_category=json_encode($request->input('catValue'));
        
        $pCoupon->save();
        $coupon = Coupon::all();

        return redirect()->back()->with('success', 'Coupon Added Successfully!');
    }
    public function user_store(Request $request)
    {
        $user_coupon = Coupon::where('coupon_code',$request->user_coupon_code)->first();
        //dd($user_coupon);
        if(!$user_coupon){
            return redirect()->back()->with('error', 'Coupon Not Found!!');
        }
        else{
            $carts = session()->get('cart');
            $total=0;
            foreach ($carts as $cart) {
                $total += $cart['price'] * $cart['quantity'];
                //echo print_r($carts, true);
            }
            $discountAmount=10;
            $deliveryCharge=(new DeliveryChargeController)->show();
            $discount=($total*$discountAmount)/100;
            $totalAmount=($total-$discount)+$deliveryCharge;
            
            return redirect()->route('users.products.checkout')->with( ['totalAmount' => $totalAmount,'discount' => $discount,'success'=> 'Coupon Added']);
        }
    }
}
