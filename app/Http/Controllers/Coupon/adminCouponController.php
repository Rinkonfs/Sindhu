<?php

namespace App\Http\Controllers\Coupon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminCouponController extends Controller
{
    public function coupon(){
        return view('Backend_Pages/coupon_page');
    } 
}
