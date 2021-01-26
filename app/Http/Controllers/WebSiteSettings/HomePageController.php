<?php

namespace App\Http\Controllers\WebSiteSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteSettings\HomePageSetting;
use App\Models\WebsiteSettings\desktopslider;
use App\Models\WebsiteSettings\mobileslider;
use App\Models\WebsiteSettings\newarrival;
use App\Models\WebsiteSettings\newdeal;
use App\Models\Category\productCategory;

class HomePageController extends Controller
{
    public function homepage(){
        return view('Backend_Pages/HomePageSetting');
    }
    public function view()
    {
        $desktop = desktopslider::all();
        $mobile = mobileslider::all();
        $category = productCategory::all();
        $newarrival = newarrival::all();
        $newdeal = newdeal::all();
        
        return view('Backend_Pages.creates', compact('desktop','mobile','category','newarrival','newdeal'));
    }
    public function show()
    {
       
    }
    public function save(Request $request)
    {
        return $request;
    }
    public function desktopslider(Request $request) {
        $request->validate([
            'image1' => 'required',
            'desktopimage1_name' => 'required',
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$request->image1->extension();
        $request->image1->move(public_path().'/uploads/desktop/', $imageName);
      
        $form= new desktopslider();
        $form->filename=$imageName;
        $form->name=$request->input('desktopimage1_name');
        
        
        $form->save();
        
        return back() 
        ->with('success','You have successfully upload image.');
    }

    public function desktopSliderDestroy($id) {

        $desktopslider = desktopslider::find($id);
    
        $desktopslider->delete();
    
        return redirect('settings');
    
    }

    public function mobileslider(Request $request){
        $request->validate([
            'mobileimage' => 'required',
            'mobileimage_name' => 'required',
            'mobileimage.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$request->mobileimage->extension();
        $request->mobileimage->move(public_path().'/uploads/mobile/', $imageName);
      
        $form= new mobileslider();
        $form->filename=$imageName;
        $form->name=$request->input('mobileimage_name');
        
        
        $form->save();
        
        return back() 
        ->with('success','You have successfully upload image.');
    }

    public function mobileSliderDestroy($id) {

        $mobileslider = mobileslider::find($id);
    
        $mobileslider->delete();
    
        return redirect('settings');
    
    }
    public function newarrival(Request $request) {
        // return $request;
        $request->validate([
            'newarrivalimage' => 'required',
            'websiteSetting_prod_name' => 'required',
            // 'websiteSetting_category' => 'required',
            'newarrivalimage.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$request->newarrivalimage->extension();
        $request->newarrivalimage->move(public_path().'/uploads/newarrival/', $imageName);
      
        $form= new newarrival();
        $form->filename=$imageName;
        $form->name=$request->input('websiteSetting_prod_name');
        $form->category="handloom";
        // $form->category=$request->input('websiteSetting_category');
        
        $form->save();
        
        return back() 
        ->with('success','New Arrival Product Added Successfully.');
   
    }
    public function newarrivalDestroy($id) {

        $newarrival = newarrival::find($id);
    
        $newarrival->delete();
    
        return redirect('settings');
    
    }
    // public function newdealedit($id) {
        
    //     $newdeal = newdeal::find($id);
    //     return view('settings', compact('newdeal'));   
    // }
    public function newdealupdate(Request $request,$id) {
        
        $request->validate([
            'image_main' => 'required',
            'title' => 'required',
            'sub_title' => 'required',
            'ProductName' => 'required',
            'price' => 'required',
            'discount_price' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
            // 'websiteSetting_category' => 'required',
            'image_main.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image1.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image_main->extension();
        $request->image_main->move(public_path().'/uploads/newdeal/', $imageName);
        $imageName1 = time().'.'.$request->image1->extension();
        $request->image1->move(public_path().'/uploads/newdeal/', $imageName1);
        $imageName2 = time().'.'.$request->image2->extension();
        $request->image2->move(public_path().'/uploads/newdeal/', $imageName2);
        $imageName3 = time().'.'.$request->image3->extension();
        $request->image3->move(public_path().'/uploads/newdeal/', $imageName3);
        

        $post = newdeal::find(['id' => $id]); 

        
        $post->imagelink1 = $imageName ?? $post->imagelink1;
        $post->title = $request->title ?? $post->title;
        $post->subtitle = $request->sub_title ?? $post->subtitle;
        $post->productname = $request->ProductName ?? $post->productname;
        $post->price = $request->price ?? $post->price;
        $post->discountprice = $request->discount_price ?? $post->discountprice;
        $post->imagelink2 = $imageName1 ?? $post->imagelink2;
        $post->imagelink3 = $imageName2 ?? $post->imagelink3;
        $post->imagelink4 = $imageName3 ?? $post->imagelink4;

        $post->save();
        
        return back() 
        ->with('success','New Arrival Product Added Successfully.');
    }

}
