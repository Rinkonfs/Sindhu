<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_controller extends Controller
{
    
    public function adminLogin(){
        return view('Backend_Pages/adminLogin');
    }
    public function adminDashboard(){
        return view('Backend_Pages/dashView');
    } 
    public function orderPage(){
        return view('Backend_Pages/Order_page');
    } 
    
   
}
