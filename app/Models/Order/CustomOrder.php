<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Model;

class CustomOrder extends Model
{
    protected $fillable =[
        'name',
        'color',
        'design',
        'mobile',
        'quantity',
        'message',
        'wear_type'
    ];
}
