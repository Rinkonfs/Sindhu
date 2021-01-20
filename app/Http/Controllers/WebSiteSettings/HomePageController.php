<?php

namespace App\Http\Controllers\WebSiteSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteSettings\HomePageSetting;

class HomePageController extends Controller
{
    public function homepage(){
        return view('Backend_Pages/HomePageSetting');
    }
    public function view()
    {
        return view('Backend_Pages.creates');
    }

    public function save(Request $request)
    {


        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        if($request->hasfile('filename'))
         {

            foreach($request->file('filename') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/uploads/', $name);  
                $data[] = $name;  
            }
         }

         $form= new HomePageSetting();
         $form->filename=json_encode($data);
         
        
        $form->save();

        return back()->with('success', 'Your images has been successfully');
    }
}
