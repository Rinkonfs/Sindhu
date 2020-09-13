<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class productCategory extends Model
{
    public function child(){
        return $this->hasMany('App\Models\Category\productCategory','cat_p_id');
    }
    public function parent(){
        return $this->hasMany('App\Models\Category\productCategory','id');
    }
    protected $table='product_categories';
    protected $fillable=['cat_name','cat_p_id','cat_desc'];

}
