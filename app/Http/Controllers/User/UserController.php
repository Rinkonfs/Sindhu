<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        //
    }


    public function update(Request $request, User $user)
    {

        $this->validate($request,[
            'name'=> ['required', 'string', 'max:255'],
        ]);

        if($user->phone != $request->phone)
            $this->validate($request,[
                'phone'=> ['required', 'string', 'max:11', 'min:11', 'unique:users'],
            ]);

        if($user->email != $request->email)
            $this->validate($request,[
                'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);

        if($request->password)
        {
            $this->validate($request,[
                'password' => ['required', 'string', 'min:8'],
            ]);
            $user->password = bcrypt($request->password);
        }


        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;


        $user->save();

        return redirect()->back()->with('success', 'Information added successfully!');
    }


    public function destroy(User $user)
    {
        //
    }
}
