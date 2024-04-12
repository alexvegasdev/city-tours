<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/home');
        }
        return view('register');
    }

    public function store(RegisterRequest $request){
        
        // $user = User::create([
        //     'firstname' => $request->firstname,
        //     'lastname'=>$request->lastname,
        //     'phone'=>$request->phone,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);
        
        $user = User::create($request->validated());

        return redirect('/login')->with('success', 'Acount created successfully');




    }
}
