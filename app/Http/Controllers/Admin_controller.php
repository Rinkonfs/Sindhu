<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class Admin_controller extends Controller
{
    
    public function adminLogin(){
        return view('Backend_Pages/adminLogin');
    }
    public function adminDashboard(){
        return view('Backend_Pages/dashView');
    } 
    public function orderPage()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(6);


        //return $orders;

        return view('Backend_Pages.Order_page', compact('orders'));
    } 
}
