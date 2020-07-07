<?php


namespace App\Http\Services\Product;


use App\Models\Product;
use Illuminate\Http\Request;

class ProductServices
{
    public function storeProduct(Request $request)
    {

        if($request->file('images'))
        {
            $imagesName = time().'.'.$request->images->extension();
            $request->images->move(public_path('product/images'), $imagesName);
            $request->images = $imagesName;
        }

        if($request->stock) $request->stock = 1;
        else $request->stock = 0;

        $product = new Product();

        $product->name = $request->name;
        $product->short_description = $request->short_description;
        $product->full_description = $request->full_description;
        $product->price = $request->price;
        $product->color = $request->color;
        $product->size = $request->size;
        $product->images = 'product/images/' . $imagesName;
        $product->stock = $request->stock;

        $product->save();


//        $request->validate([
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);


//        $input=$request->all();
//
//        $images=array();
//
//        if($files=$request->file('images')){
//            foreach($files as $file){
//                $name=$file->getClientOriginalName();
//                $file->move('image',$name);
//                $images[]=$name;
//            }
//        }
//        /*Insert your data*/
//
//        Detail::insert( [
//            'images'=>  implode("|",$images),
//            'description' =>$input['description'],
//            //you can put other insertion here
//        ]);
    }

}
