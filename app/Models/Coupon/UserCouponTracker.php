<?php

namespace App\Models\Coupon;

use Illuminate\Database\Eloquent\Model;

class UserCouponTracker extends Model
{
    protected $fillable =[
        'couponID',
        'amount',
    ];
    
   
}
