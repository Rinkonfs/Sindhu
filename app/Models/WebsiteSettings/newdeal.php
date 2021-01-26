<?php

namespace App\Models\WebsiteSettings;

use Illuminate\Database\Eloquent\Model;

class newdeal extends Model
{
    protected $fillable = [
        'imagelink1',
        'title',
        'subtitle',
        'productname',
        'price',
        'discountprice',
        'imagelink2',
        'imagelink3',
        'imagelink4',
        ];
}
