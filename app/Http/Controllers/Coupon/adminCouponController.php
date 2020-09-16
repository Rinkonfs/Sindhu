<?php

namespace App\Http\Controllers\Coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon\Coupon;
use App\Models\Coupon\UserCouponTracker;
use App\Models\Order;

use App\Http\Controllers\Delivery\DeliveryChargeController;
use Auth;


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
            $endDate = $user_coupon->end_date; //End Date
            $startDate= $user_coupon->created_at->format('Y-m-d'); //Start Date

            // Date Calculation Start
                $currDate=date_default_timezone_set('Asia/Dhaka');
                $current_date = date('Y-m-d');
                // $difference_client_inSec = strtotime($endDate) - strtotime($startDate);
                // $difference_client_inDays = ($difference_client_inSec / (60*60*24) );

                $difference_user_insec = strtotime($endDate) - strtotime($current_date);
                $difference_user_inDays = ($difference_user_insec / (60*60*24) );
            // Date Calculation End

            if($difference_user_inDays > 0){
                $hasOrder=Order::where('user_id',Auth::user()->id)->first();
                
                if(Auth::check() && $hasOrder != NULL){
                    $discountPercentage=$user_coupon->discount_percentage; // The discount percentage 
                    $deliveryCharge=(new DeliveryChargeController)->show(); // The delivery charge
                    $discount=($total*$discountPercentage)/100; //The discount Amount
                    $totalAmount=($total-$discount)+$deliveryCharge; //The Total Amount after discount
                    $exceedLimit=$user_coupon->amount_exceed; //This is the exceed limit

                    $generatedCouponName=Auth::user()->id.$user_coupon->coupon_code; //generating couponID
                    $couponTracker =new UserCouponTracker(); //Initializing object of Coupon tracker

                    $finding_couponID=UserCouponTracker::where('couponID',$generatedCouponName)->first(); //Getting coupon id from database
                    if(!$finding_couponID){
                        $couponTracker->couponID=$generatedCouponName; //Saving Coupon id name in database
                        if($discount <= $exceedLimit){
                            $couponTracker->amount=$discount; //Saving Coupon amount in database
                        }
                        else{
                            $totalAmount = $totalAmount+ abs($discount-$exceedLimit);
                            $discount=$exceedLimit;
                            $couponTracker->amount=0;
                        }
                        // $couponTracker->amount_status=0;  //Saving amount_status name in database
                        $couponTracker->save();
                        return redirect()->route('users.products.checkout')->with( ['totalAmount' => $totalAmount,'discount' => $discount,'success'=> 'Coupon Added']);
                    }
                    else{
                        // $couponTracker->couponID=$generatedCouponName;
                        $finding_updatedPrice=$finding_couponID->amount;
                         // return $exceedLimit;
                         
                         if($finding_updatedPrice<$exceedLimit ){
                            $limitRemaining=$exceedLimit-$finding_updatedPrice;
                            // return $limitRemaining;

                            if($limitRemaining > $discount){
                                $updatingPriceAgain=$finding_updatedPrice+$discount;
                                $finding_couponID->update(array('amount' => $updatingPriceAgain));
                                return redirect()->route('users.products.checkout')->with( ['totalAmount' => $totalAmount,'discount' => $discount,'success'=> 'Coupon Added']);
                            }
                            else{
                                 $totalAmount=$totalAmount+($discount-$limitRemaining);
                                 $finding_couponID->update(array('amount' => $exceedLimit));
                                 return redirect()->route('users.products.checkout')->with( ['totalAmount' => $totalAmount,'discount' => ($exceedLimit-$finding_updatedPrice),'success'=> 'Coupon Added ,also you have reached your maximum limit so the remaining of the discount was applied to your order']);
                            }
                         }
                         else{
                            // // return abs($finding_updatedPrice-$exceedLimit);
                            // $discount = $exceedLimit-$finding_updatedPrice;
                             $totalAmount=$totalAmount+$discount;
                           
                            return redirect()->route('users.products.checkout')->with( ['totalAmount' => $totalAmount,'discount' => 0,'error'=> 'Discount Limit Reached , Better Luck next time!']);
                        }
                    }
                   
                }
                else{
                    
                     return redirect()->route('users.products.checkout')->with( ['error'=> 'Coupons only available after first order']);
                }   
              }
             else{
                return redirect()->route('users.products.checkout')->with( ['error'=> 'Coupon Date Expired']);     
              } 
            // return redirect()->route('users.products.checkout')->with( ['totalAmount' => $totalAmount,'discount' => $discount,'success'=> 'Coupon Added']);
        }
    }
    public function test(Request $request)
    {
        
        //
        
    }
}
