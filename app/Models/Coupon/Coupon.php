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
    public static function findByCode($coupon_code){
        return self::where('coupon_code',$coupon_code)->first();

    }
    public static function discount($coupon_code){
        if($this->type=='fixed'){

            
            return $this->value;
        }elseif($this->type=='percentage'){
            return ($this->percent_off /100)*$total;
        }else
            return 0;
    }
   

}
