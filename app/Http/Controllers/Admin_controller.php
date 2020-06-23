<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_controller extends Controller
{
    
    public function adminLogin(){
        return view('Backend_Pages/adminLogin');
    }
}
