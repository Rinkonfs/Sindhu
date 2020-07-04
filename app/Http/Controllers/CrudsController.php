<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $data = Crud::latest()->paginate(5);
            return view('index',compact('data'))
                ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'productPrice'  => 'required',
            'productColor'  => 'required',
            'productSize'  => 'required',
            'description'  => 'required',
            'inStock'  => 'required',
            'productName'  => 'required',
            'image'   => 'required|image|max:2048'  


        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image -> getClientOriginalExtension();

        $image->move(public_path('images'),$new_name);

        $form_data = array(

            'productPrice'   => $request-> productPrice,
            'productColor'   => $request-> productColor,
            'productSize'   => $request-> productSize,
            'description'   => $request-> description,
            'inStock'       => $request-> inStock,
            'productName'   => $request-> productName,
            'image'         => $new_name

        );

        Crud::create($form_data);

        return redirect('crud')->with('success', 'Data Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
