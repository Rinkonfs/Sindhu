<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_Controller extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('pages/about');
    }
    
    public function contact(){
        return view('pages/contact');
    }
    public function shop(){
        return view('pages/shop');
    }
    public function signup(){
        return view('pages/signup');
    }
    
    public function dashboard(){
        return view('pages/dashboard');
    }
    public function login(){
        return view('admin_pages/login');
    }
    public function customOrder(){
        return view('pages/customOrder');
    }
    
}
