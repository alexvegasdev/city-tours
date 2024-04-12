<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){

        if(Auth::check()){
            return redirect('/home');
        }
        return view ('login');
    }

    public function store(LoginRequest $request){

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/home');
            
        }else{
            return redirect()->back()->withErrors([
                'email' => 'The credentials provided are not valid.',
            ]);
        }
    }
}
