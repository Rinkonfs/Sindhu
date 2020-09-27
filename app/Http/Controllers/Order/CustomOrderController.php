<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomOrderController extends Controller
{
    
    public function store(Request $request){
        
        $data = $request->all();
        // return response()->json(['success'=>$data]);  //FOR TESTING DATA
        
         return response()->json(['success'=>"Data Saved"]);
    }
    public function index (){
        return dd($data);
       
    }
}
