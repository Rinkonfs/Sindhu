<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('pages/about');
    }
    public function cart(){
        return view('pages/cart');
    }
    public function contact(){
        return view('pages/contact');
    }
    public function shop(){
        return view('pages/shop');
    }
    public function login(){
        return view('admin_pages/login');
    }
    public function adminLogin(){
        return view('admin_pages/adminLogin');
    }
    public function signup(){
        return view('pages/signup');
    }
    public function checkout(){
        return view('pages/checkout');
    }
    public function dashboard(){
        return view('pages/dashboard');
    }

    public function test(){
        return view('pages.product-single');
    }
}
