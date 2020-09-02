<?php

namespace App\Models\Coupon;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable =[
        'coupon_name',
        'coupon_code',
        'end_date',
        'discount_percentage',
        'active_status',
        'product_category',
        'amount_exceed',
        'user_dependent',
        'user_dependent_validity',
        'create_date'
    ];
}
