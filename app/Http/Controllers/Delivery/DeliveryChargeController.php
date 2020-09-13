<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Delivery\DeliveryCharge;


class DeliveryChargeController extends Controller
{
    public function store(Request $request){
        
        $cVar_deliveryCharge =new DeliveryCharge();

        $cVar_deliveryCharge->delivery_charge=$request->input('delivery_charge');
        
        $cVar_deliveryCharge->save();
        // $cVar_deliveryInfo = DeliveryCharge::all();
        // dd($cVar_deliveryInfo);

        return redirect()->back()->with('success', 'Delivery Charge Saved');
    }
    public function show(){
        return $deliverycharge = DeliveryCharge::latest()->first()->delivery_charge;
    }
}
