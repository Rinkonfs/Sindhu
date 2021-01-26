<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Models\WebsiteSettings\desktopslider;
use App\Models\WebsiteSettings\mobileslider;
use App\Models\WebsiteSettings\newarrival;
use App\Models\WebsiteSettings\newdeal;


use Illuminate\Http\Request;

class Page_Controller extends Controller
{
    public function index(){
        $cats = desktopslider::all();
        $mobile_slider = mobileslider::all();
        $new_arrival_product = newarrival::all();
        $new_deal= newdeal::all();
        return view('home', compact('cats','mobile_slider','new_arrival_product','new_deal'));
        // return view('home');
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
        Redirect::back()->withErrors(['msg', 'The Message']);
    }
    public function customOrder(){
        return view('pages/customOrder');
    }
    
}
