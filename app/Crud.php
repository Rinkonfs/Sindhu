<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model   
{
    protected $fillable = [

    
    'productName',
    'productPrice',
   'productColor',
    'productSize',
    'image',
    'category',
    'description',
    'inStock'
        
    ];
}
