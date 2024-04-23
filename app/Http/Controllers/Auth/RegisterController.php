<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\UpdateRequest;
use App\Models\User;
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
        
        $user = User::create($request->validated());

        return redirect('/login')->with('success', 'Acount created successfully');
    }

    public function edit(User $user)
    {
        if (Auth::id() !== $user->id) {
            return redirect('/home')->with('error', 'Unauthorized access');
        }

        return view('/user.edit', compact('user'));
    }

    public function update(UpdateRequest $request, User $user)
    {
        if (Auth::id() !== $user->id) {
            return redirect('/home')->with('error', 'Unauthorized access');
        }

        $user->update($request->validated());
        
        return redirect('/home')->with('success', 'Account updated successfully');
    }



}
