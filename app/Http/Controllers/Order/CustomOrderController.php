<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order\CustomOrder;

class CustomOrderController extends Controller
{
    
    public function store(Request $request){
        $order = new CustomOrder();
        $data = $request->all();
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'quantity' => 'required',
            'message' => 'required',
            'ajax_color' => 'required',
            'ajax_design' => 'required',
            'wear_type' => 'required',
        ]);
        $order->name = $request->name;
        $order->color = $request->ajax_color;
        $order->design = $request->ajax_design;
        $order->mobile = $request->mobile;
        $order->quantity = $request->quantity;
        $order->message = $request->message;
        $order->wear_type = $request->wear_type;
        $order->save();
        return response()->json(['success'=>$data]);  //FOR TESTING DATA
        //  $order->order_status =
        //  return response()->json(['success'=>"Data Saved"]);
    }
    public function show (){
        $order = CustomOrder::all();
        // return view('pages.shop',compact('cats'));
        return view('Backend_pages/customOrder',compact('order'));

        // return view('Backend_pages/customOrder');
       
    }
}
